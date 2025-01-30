<?php

namespace Zerotoprod\OmdbApiCli\Poster;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\OmdbApi\OmdbApi;

#[AsCommand(
    name: PosterCommand::signature,
    description: 'Get the poster of a movie or series'
)]
class PosterCommand extends Command
{
    public const signature = 'omdb-api-cli:poster';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $Options = PosterArguments::from($input->getArguments());

        $output->writeLn(
            (new OmdbApi($Options->apikey))->poster(
                $Options->imdbid
            )
        );

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this->addArgument(PosterArguments::apikey, InputArgument::REQUIRED, 'The API key.');
        $this->addArgument(PosterArguments::imdbid, InputArgument::REQUIRED, 'The ImdbID of the title.');
    }
}