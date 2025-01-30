<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;
use Zerotoprod\OmdbApiCli\ByIdOrTitle\ByIdOrTitleArguments;
use Zerotoprod\OmdbApiCli\ByIdOrTitle\ByIdOrTitleCommand;
use Zerotoprod\OmdbApiCli\ByIdOrTitle\ByIdOrTitleOptions;

class ByIdOrTitleTest extends TestCase
{
    #[Test] public function command(): void
    {
        $Application = new Application();
        $Application->add(new ByIdOrTitleCommand());

        $Command = $Application->find(ByIdOrTitleCommand::signature);
        $CommandTester = new CommandTester($Command);
        $CommandTester->execute([
            ByIdOrTitleArguments::apikey => '',
            '--'.ByIdOrTitleOptions::title => '',
        ]);

        $CommandTester->assertCommandIsSuccessful();
    }
}