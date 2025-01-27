<?php

namespace Zerotoprod\OmdbApiCli;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'omdb-api-cli:src',
    description: 'Project source link'
)]
class SrcCommand extends Command
{

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeLn('https://github.com/zero-to-prod/omdb-api-cli');

        return Command::SUCCESS;
    }
}