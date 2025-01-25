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
        $application = new Application();
        $application->add(new PosterCommand());

        $command = $application->find('poster');
        $commandTester = new CommandTester($command);
        $commandTester->execute([
            PosterOptions::apikey => '',
            PosterOptions::imdbid => '',
        ]);

        $commandTester->assertCommandIsSuccessful();
    }
}