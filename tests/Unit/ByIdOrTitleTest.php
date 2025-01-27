<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;
use Zerotoprod\OmdbApiCli\ByIdOrTitleCommand;
use Zerotoprod\OmdbApiCli\DataModels\ByIdOrTitleOptions;

class ByIdOrTitleTest extends TestCase
{
    #[Test] public function command(): void
    {
        $Application = new Application();
        $Application->add(new ByIdOrTitleCommand());

        $Command = $Application->find('omdb-api-cli:byIdOrTitle');
        $CommandTester = new CommandTester($Command);
        $CommandTester->execute([
            ByIdOrTitleOptions::apikey => '',
            '--'.ByIdOrTitleOptions::title => '',
        ]);

        $CommandTester->assertCommandIsSuccessful();
    }
}