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

class PlayCommand extends Command
{

    protected function configure()
    {
        $this->setName('play');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');
        $question = new Question(Game::ATTACK_INTRO);

        $hive = new Hive();
        $hive->add(Queen::class, 1);
        $hive->add(Drone::class, 5);
        $hive->add(Worker::class, 8);

        $game = new Game($hive);

        while ($game->playing()) {

            if ($helper->ask($input, $output, $question) == Game::ATTACK_ACTION) {
                $game->hit();
            }

            $messages = $game->getMessages();

            foreach ($messages as $message) {
                $output->writeLn($message);
            }
        }
    }
}
