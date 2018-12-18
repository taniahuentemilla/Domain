<?php

namespace Inani\Larapoll\Tests;

use App\User;
use Inani\Larapoll\Poll;
use InvalidArgumentException;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Inani\Larapoll\Exceptions\VoteInClosedPollException;
use Inani\Larapoll\Exceptions\RemoveVotedOptionException;

class PollTest extends \TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function crear_nueva_encuesta()
    {
        $encuesta = new Poll([
            'pregunta' => '•    ¿Cómo encuentras que ha sido el desempeño del tutor a lo largo del semestre?'
        ]);

        $bool = $encuesta->addOptions(['muy bueno','bueno','deficiente','malo','muy malo'])
                     ->maxSelection()
                     ->generate();

        $this->assertTrue($bool);
        $this->assertTrue($encuesta->isRadio());
        $this->assertEquals(5, $encuesta->optionsNumber());
    }

    /** @test */
    public function it_adds_new_options()
    {
        $encuesta = new Poll([
            'question' => 'What is the best PHP framework?'
        ]);

        $bool = $encuesta->addOptions(['Laravel', 'Zend', 'Symfony', 'Cake'])
                    ->maxSelection()
                    ->generate();

        $this->assertTrue($bool);
        $this->assertTrue($encuesta->isRadio());
        $this->assertEquals(4, $encuesta->optionsNumber());

        $encuesta->attach([
            'Yii', 'CodeIgniter'
        ]);

        $this->assertEquals(6, $encuesta->optionsNumber());
    }

    /** @test */
    public function it_removes_unvoted_options_from_poll()
    {
        $encuesta = new Poll([
            'question' => 'What is the best PHP framework?'
        ]);

        $bool = $encuesta->addOptions(['Laravel', 'Zend', 'Symfony', 'Cake'])
            ->maxSelection()
            ->generate();

        $this->assertTrue($bool);
        $this->assertEquals(4, $encuesta->optionsNumber());

        $option = $encuesta->options()->first();
        $this->assertTrue($encuesta->detach($option));
        $this->assertEquals(3, $encuesta->optionsNumber());

    }

    /** @test */
    public function user_votes_in_a_poll()
    {
        $voter = $this->makeUser();
        $encuesta = new Poll([
            'question' => 'What is the best PHP framework?'
        ]);

        $encuesta->addOptions(['Laravel', 'Zend', 'Symfony', 'Cake'])
                     ->maxSelection(2)
                     ->generate();
        $voteFor = $encuesta->options()->first();
        $this->assertTrue($voter->poll($encuesta)->vote($voteFor->getKey()));
    }

    /** @test */
    public function user_selects_more_options_to_votes_in_a_poll()
    {
        $voter = $this->makeUser();
        $encuesta = new Poll([
            'question' => 'What is the best PHP framework?'
        ]);

        $encuesta->addOptions(['Laravel', 'Zend', 'Symfony', 'Cake'])
                     ->maxSelection(2)
                     ->generate();
        $voteFor = $encuesta->options()->get()->take(3)->pluck('id')->all();
        try{
            $voter->poll($encuesta)->vote($voteFor);
        }catch (\InvalidArgumentException $e){

        }
        $this->assertNotNull($e);
    }

    /** @test */
    public function it_doesnt_remove_voted_options_from_poll()
    {
        $voter = $this->makeUser();
        $encuesta = new Poll([
            'question' => 'What is the best PHP framework?'
        ]);

        $bool = $encuesta->addOptions(['Laravel', 'Zend', 'Symfony', 'Cake'])
                     ->maxSelection(2)
                     ->generate();

        $this->assertTrue($bool);
        $this->assertEquals(4, $encuesta->optionsNumber());

        $option = $encuesta->options()->first();
        $this->assertTrue($voter->poll($encuesta)->vote($option->getKey()));
        try{
            $encuesta->detach($option);
        }catch (RemoveVotedOptionException $e){
        }
        $this->assertNotNull($e);

        $this->assertEquals(4, $encuesta->optionsNumber());
    }

    /** @test */
    public function it_gets_poll_ordered()
    {
        $voter = $this->makeUser();
        $anOtherVoter = $this->makeUser();
        $encuesta = new Poll([
            'question' => 'What is the best PHP framework?'
        ]);

        $encuesta->addOptions(['Laravel', 'Zend', 'Symfony', 'Cake'])
            ->maxSelection(2)
            ->generate();
        $option = $encuesta->options()->first();
        $this->assertTrue($voter->poll($encuesta)->vote($option->getKey()));
        $this->assertTrue($anOtherVoter->poll($encuesta)->vote($option->getKey()));

        $mostVoted = $encuesta->results()->inOrder()[0];
        $this->assertEquals($option->getKey(), $mostVoted["option"]->getKey());
        $this->assertEquals(2, $mostVoted["votes"]);
    }

    /** @test */
    public function it_closes_poll()
    {
        $encuesta = new Poll([
            'question' => 'What is the best PHP framework?'
        ]);

        $encuesta->addOptions(['Laravel', 'Zend', 'Symfony', 'Cake'])
            ->maxSelection(2)
            ->generate();
        $this->assertFalse($encuesta->isLocked());
        $this->assertTrue($encuesta->lock());
        $this->assertTrue($encuesta->isLocked());
    }

    /** @test */
    public function it_doesnt_vote_in_closed_poll()
    {
        $voter = $this->makeUser();
        $encuesta = new Poll([
            'question' => 'What is the best PHP framework?'
        ]);

        $encuesta->addOptions(['Laravel', 'Zend', 'Symfony', 'Cake'])
            ->maxSelection(2)
            ->generate();
        $this->assertTrue($encuesta->lock());
        $option = $encuesta->options()->first();

        try{
            $voter->poll($encuesta)->vote($option->getKey());
        }catch(\Exception $e){
            $this->assertTrue($e instanceof VoteInClosedPollException);
        }
        $this->assertNotNull($e);
    }

    /** @test */
    public function it_does_reopen_a_closed_poll()
    {
        $voter = $this->makeUser();
        $encuesta = new Poll([
            'question' => 'What is the best PHP framework?'
        ]);

        $encuesta->addOptions(['Laravel', 'Zend', 'Symfony', 'Cake'])
            ->maxSelection(2)
            ->generate();
        $this->assertTrue($encuesta->lock());
        $option = $encuesta->options()->first();

        try{
            $voter->poll($encuesta)->vote($option->getKey());
        }catch(\Exception $e){
            $this->assertTrue($e instanceof VoteInClosedPollException);
        }
        $this->assertNotNull($e);

        $encuesta->unLock();
        $this->assertTrue($voter->poll($encuesta)->vote($option->getKey()));
    }
    /** @test */
    public function it_removes_poll_with_its_options_and_votes()
    {
        $voter = $this->makeUser();

        $encuesta = new Poll([
            'question' => 'What is the best PHP framework?'
        ]);

        $encuesta->addOptions(['Laravel', 'Zend', 'Symfony', 'Cake'])
            ->maxSelection()
            ->generate();

        $voteFor = $encuesta->options()->first();

        $voter->poll($encuesta)->vote($voteFor->getKey());

        $id = $encuesta->id;
        $this->assertTrue($encuesta->remove());
        $this->dontSeeInDatabase('options', [
                'poll_id' => $id
            ]);;
    }
    /**
     * Make one user
     *
     * @return mixed
     */
    public function makeUser()
    {
        return factory(User::class)->create();
    }
}
