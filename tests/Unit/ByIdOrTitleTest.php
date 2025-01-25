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
        $application = new Application();
        $application->add(new ByIdOrTitleCommand());

        $command = $application->find('byIdOrTitle');
        $commandTester = new CommandTester($command);
        $commandTester->execute([
            ByIdOrTitleOptions::apikey => '',
            '--'.ByIdOrTitleOptions::title => '',
        ]);

        $commandTester->assertCommandIsSuccessful();
    }
}