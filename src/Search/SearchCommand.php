<?php

namespace Zerotoprod\OmdbApiCli\Search;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\OmdbApi\OmdbApi;

/**
 * @link https://github.com/zero-to-prod/omdb-api-cli
 */
#[AsCommand(
    name: SearchCommand::signature,
    description: 'Search for a movie, series or episode'
)]
class SearchCommand extends Command
{
    /**
     * @link https://github.com/zero-to-prod/omdb-api-cli
     */
    public const signature = 'omdb-api-cli:search';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $Args = SearchArguments::from($input->getArguments());
        $Options = SearchOptions::from($input->getOptions());

        $output->writeLn(
            json_encode(
                (new OmdbApi($Args->apikey))->search(
                    $Args->title,
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
        $this->addArgument(SearchArguments::apikey, InputArgument::REQUIRED, 'The API key.');
        $this->addArgument(SearchArguments::title, InputArgument::REQUIRED, 'The ImdbID of the title.');
        $this->addOption(SearchOptions::type, mode: InputOption::VALUE_OPTIONAL, description: 'The type of the title: movie, series, episode', suggestedValues: ['movie', 'series', 'episode']);
        $this->addOption(SearchOptions::year, mode: InputOption::VALUE_OPTIONAL, description: 'The title year.');
        $this->addOption(SearchOptions::page, mode: InputOption::VALUE_OPTIONAL, description: 'The page number.');
    }
}