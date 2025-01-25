<?php

namespace Zerotoprod\OmdbApiCli;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\OmdbApi\OmdbApi;
use Zerotoprod\OmdbApiCli\DataModels\ByIdOrTitleOptions;
use Zerotoprod\OmdbApiCli\DataModels\SearchOptions;

#[AsCommand(
    name: 'byIdOrTitle',
    description: 'Get title by ID or name'
)]
class ByIdOrTitleCommand extends Command
{

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $Options = ByIdOrTitleOptions::from([...$input->getArguments(), ...$input->getOptions()]);

        $output->write(
            json_encode(
                (new OmdbApi($Options->apikey))->byIdOrTitle(
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
        $this->addArgument(ByIdOrTitleOptions::apikey, InputArgument::REQUIRED, 'The API key.');
        $this->addOption(ByIdOrTitleOptions::title, mode: InputOption::VALUE_OPTIONAL, description: 'The name of the title');
        $this->addOption(ByIdOrTitleOptions::imdbid, mode: InputOption::VALUE_OPTIONAL, description: 'The Imdb of the title');
        $this->addOption(SearchOptions::type, mode: InputOption::VALUE_OPTIONAL, description: 'The type of the title: movie, series, episode', suggestedValues: ['movie', 'series', 'episode']);
        $this->addOption(ByIdOrTitleOptions::year, mode: InputOption::VALUE_OPTIONAL, description: 'The title year.');
        $this->addOption(ByIdOrTitleOptions::full_plot, mode: InputOption::VALUE_NONE, description: 'The page number.');
    }
}