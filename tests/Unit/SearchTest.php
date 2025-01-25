<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;
use Zerotoprod\OmdbApiCli\DataModels\SearchOptions;
use Zerotoprod\OmdbApiCli\SearchCommand;

class SearchTest extends TestCase
{
    #[Test] public function command(): void
    {
        $application = new Application();
        $application->add(new SearchCommand());

        $command = $application->find('search');
        $commandTester = new CommandTester($command);
        $commandTester->execute([
            SearchOptions::apikey => '',
            SearchOptions::title => '',
        ]);

        $commandTester->assertCommandIsSuccessful();
    }
}