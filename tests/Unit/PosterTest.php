<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;
use Zerotoprod\OmdbApiCli\DataModels\PosterOptions;
use Zerotoprod\OmdbApiCli\PosterCommand;

class PosterTest extends TestCase
{
    #[Test] public function command(): void
    {
        $Application = new Application();
        $Application->add(new PosterCommand());

        $Command = $Application->find('omdb-api-cli:poster');
        $CommandTester = new CommandTester($Command);
        $CommandTester->execute([
            PosterOptions::apikey => '',
            PosterOptions::imdbid => '',
        ]);

        $CommandTester->assertCommandIsSuccessful();
    }
}