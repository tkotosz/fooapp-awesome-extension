<?php

namespace Tkotosz\FooApp\AwesomeExtension;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Tkotosz\FooApp\AwesomeExtension\Console\Command\HelloAwesomeCommand;
use Tkotosz\FooApp\Extension;

class AwesomeExtension implements Extension
{
    public function addCommands(Application $application): void
    {
        $application->add(new HelloAwesomeCommand());
    }
}