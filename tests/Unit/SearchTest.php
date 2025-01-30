<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;
use Zerotoprod\OmdbApiCli\Search\SearchArguments;
use Zerotoprod\OmdbApiCli\Search\SearchCommand;

class SearchTest extends TestCase
{
    #[Test] public function command(): void
    {
        $Application = new Application();
        $Application->add(new SearchCommand());

        $Command = $Application->find(SearchCommand::signature);
        $CommandTester = new CommandTester($Command);
        $CommandTester->execute([
            SearchArguments::apikey => '',
            SearchArguments::title => '',
        ]);

        $CommandTester->assertCommandIsSuccessful();
    }
}