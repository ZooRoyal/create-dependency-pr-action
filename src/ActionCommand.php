<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ActionCommand extends Command
{

    public function configure()
    {
        $this->setName('create-prs');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('create pullrequests for depending repositories.');
        return 0;
    }

}
