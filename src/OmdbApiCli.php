<?php

namespace Zerotoprod\OmdbApiCli;

use Symfony\Component\Console\Application;

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