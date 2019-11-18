<?php

namespace verheesj\KillTheBeesGame\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use verheesj\KillTheBeesGame\Game\Bee\Drone;
use verheesj\KillTheBeesGame\Game\Bee\Queen;
use verheesj\KillTheBeesGame\Game\Bee\Worker;
use verheesj\KillTheBeesGame\Game\Game;
use verheesj\KillTheBeesGame\Game\Hive;

/**
 * This is our Command class which is the basically the execution of the application
 *
 * @package verheesj\KillTheBeesGame\Commands
 */
class PlayCommand extends Command
{

    /**
     * Set the name of the command to play.
     */
    protected function configure()
    {
        $this->setName('play');
    }

    /**
     * When the application is executed.
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // We use the Question helper to inform the user how to play the game
        $helper = $this->getHelper('question');

        // This creates the Question to the player
        $question = new Question(Game::ATTACK_INTRO);

        // Create a new hive
        $hive = new Hive();

        // Add bees to the hive
        $hive->add(Queen::class, 1);
        $hive->add(Drone::class, 5);
        $hive->add(Worker::class, 8);

        // Create a new game
        $game = new Game($hive);

        // While loop which continues (playing), until the game is over.
        while ($game->playing()) {

            // Turn is when the user is told to type hit, and when they type hit
            if ($helper->ask($input, $output, $question) == Game::ATTACK_ACTION) {
                // we hit
                $game->hit();
            }

            // Get the messages for output to the player
            $messages = $game->getMessages();

            // Loop through the messages and output to the user
            foreach ($messages as $message) {
                $output->writeLn($message);
            }

        }
    }
}
