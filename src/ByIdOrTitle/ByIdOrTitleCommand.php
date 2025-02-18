<?php

namespace Zerotoprod\OmdbApiCli\ByIdOrTitle;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\OmdbApi\OmdbApi;
use Zerotoprod\OmdbApiCli\Search\SearchOptions;

/**
 * @link https://github.com/zero-to-prod/omdb-api-cli
 */
#[AsCommand(
    name: ByIdOrTitleCommand::signature,
    description: 'Get title by ID or name'
)]
class ByIdOrTitleCommand extends Command
{

    /**
     * @link https://github.com/zero-to-prod/omdb-api-cli
     */
    public const signature = 'omdb-api-cli:byIdOrTitle';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $Args = ByIdOrTitleArguments::from($input->getArguments());
        $Options = ByIdOrTitleOptions::from($input->getOptions());

        $output->write(
            json_encode(
                (new OmdbApi($Args->apikey))->byIdOrTitle(
                    $Options->title,
                    $Options->imdbid,
                    $Options->type,
                    $Options->year,
                    $Options->full_plot
                ),
                JSON_PRETTY_PRINT
            )
        );

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this->addArgument(ByIdOrTitleArguments::apikey, InputArgument::REQUIRED, 'The API key.');
        $this->addOption(ByIdOrTitleOptions::title, mode: InputOption::VALUE_OPTIONAL, description: 'The name of the title');
        $this->addOption(ByIdOrTitleOptions::imdbid, mode: InputOption::VALUE_OPTIONAL, description: 'The Imdb of the title');
        $this->addOption(SearchOptions::type, mode: InputOption::VALUE_OPTIONAL, description: 'The type of the title: movie, series, episode', suggestedValues: ['movie', 'series', 'episode']);
        $this->addOption(ByIdOrTitleOptions::year, mode: InputOption::VALUE_OPTIONAL, description: 'The title year.');
        $this->addOption(ByIdOrTitleOptions::full_plot, mode: InputOption::VALUE_NONE, description: 'The page number.');
    }
}