<?php

namespace Zerotoprod\OmdbApiCli\Poster;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/omdb-api-cli
 */
class PosterArguments
{
    use DataModel;

    /**
     * @link https://github.com/zero-to-prod/omdb-api-cli
     */
    public const apikey = 'apikey';
    /**
     * @link https://github.com/zero-to-prod/omdb-api-cli
     */
    public $apikey;
    /**
     * @link https://github.com/zero-to-prod/omdb-api-cli
     */
    public const imdbid = 'imdbid';
    /**
     * @link https://github.com/zero-to-prod/omdb-api-cli
     */
    public $imdbid;
}