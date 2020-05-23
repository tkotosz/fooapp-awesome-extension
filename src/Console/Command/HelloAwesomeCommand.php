<?php

namespace Tkotosz\FooApp\AwesomeExtension\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloAwesomeCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('hello:awesome')
            ->setDescription('Hello World, but awesome')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello Awesome World!');

        return 0;
    }
}