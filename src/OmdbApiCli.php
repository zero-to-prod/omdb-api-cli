<?php

namespace Zerotoprod\OmdbApiCli;

use Symfony\Component\Console\Application;
use Zerotoprod\OmdbApiCli\ByIdOrTitle\ByIdOrTitleCommand;
use Zerotoprod\OmdbApiCli\Poster\PosterCommand;
use Zerotoprod\OmdbApiCli\Search\SearchCommand;
use Zerotoprod\OmdbApiCli\Src\SrcCommand;

class OmdbApiCli
{
    public static function register(Application $Application): void
    {
        $Application->add(new SrcCommand());
        $Application->add(new ByIdOrTitleCommand());
        $Application->add(new SearchCommand());
        $Application->add(new PosterCommand());
    }
}