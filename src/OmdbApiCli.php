<?php

namespace Zerotoprod\OmdbApiCli;

use Symfony\Component\Console\Application;
use Zerotoprod\OmdbApiCli\ByIdOrTitle\ByIdOrTitleCommand;
use Zerotoprod\OmdbApiCli\Poster\PosterCommand;
use Zerotoprod\OmdbApiCli\Search\SearchCommand;
use Zerotoprod\OmdbApiCli\Src\SrcCommand;

/**
 * omdb-api-cli
 *
 * @link https://github.com/zero-to-prod/omdb-api-cli
 */
class OmdbApiCli
{
    /**
     * @link https://github.com/zero-to-prod/omdb-api-cli
     */
    public static function register(Application $Application): void
    {
        $Application->add(new SrcCommand());
        $Application->add(new ByIdOrTitleCommand());
        $Application->add(new SearchCommand());
        $Application->add(new PosterCommand());
    }
}