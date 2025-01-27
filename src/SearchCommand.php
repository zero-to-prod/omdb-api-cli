<?php

namespace Zerotoprod\OmdbApiCli;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\OmdbApi\OmdbApi;
use Zerotoprod\OmdbApiCli\DataModels\SearchOptions;

#[AsCommand(
    name: 'omdb-api-cli:search',
    description: 'Search for a movie, series or episode'
)]
class SearchCommand extends Command
{

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $Options = SearchOptions::from([...$input->getArguments(), ...$input->getOptions()]);

        $output->writeLn(
            json_encode(
                (new OmdbApi($Options->apikey))->search(
                    $Options->title,
                    $Options->type,
                    $Options->year,
                    $Options->page
                ),
                JSON_PRETTY_PRINT
            )
        );

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this->addArgument(SearchOptions::apikey, InputArgument::REQUIRED, 'The API key.');
        $this->addArgument(SearchOptions::title, InputArgument::REQUIRED, 'The ImdbID of the title.');
        $this->addOption(SearchOptions::type, mode: InputOption::VALUE_OPTIONAL, description: 'The type of the title: movie, series, episode', suggestedValues: ['movie', 'series', 'episode']);
        $this->addOption(SearchOptions::year, mode: InputOption::VALUE_OPTIONAL, description: 'The title year.');
        $this->addOption(SearchOptions::page, mode: InputOption::VALUE_OPTIONAL, description: 'The page number.');
    }
}