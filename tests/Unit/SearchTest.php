<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;
use Zerotoprod\OmdbApiCli\Search\SearchCommand;
use Zerotoprod\OmdbApiCli\Search\SearchOptions;

class SearchTest extends TestCase
{
    #[Test] public function command(): void
    {
        $Application = new Application();
        $Application->add(new SearchCommand());

        $Command = $Application->find('omdb-api-cli:search');
        $CommandTester = new CommandTester($Command);
        $CommandTester->execute([
            SearchOptions::apikey => '',
            SearchOptions::title => '',
        ]);

        $CommandTester->assertCommandIsSuccessful();
    }
}