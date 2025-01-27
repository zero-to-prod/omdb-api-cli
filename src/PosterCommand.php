<?php

namespace Zerotoprod\OmdbApiCli;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\OmdbApi\OmdbApi;
use Zerotoprod\OmdbApiCli\DataModels\PosterOptions;

#[AsCommand(
    name: 'omdb-api-cli:poster',
    description: 'Get the poster of a movie or series'
)]
class PosterCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $Options = PosterOptions::from($input->getArguments());

        $output->writeLn(
            (new OmdbApi($Options->apikey))->poster(
                $Options->imdbid
            )
        );

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this->addArgument(PosterOptions::apikey, InputArgument::REQUIRED, 'The API key.');
        $this->addArgument(PosterOptions::imdbid, InputArgument::REQUIRED, 'The ImdbID of the title.');
    }
}