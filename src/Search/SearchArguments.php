<?php

namespace Zerotoprod\OmdbApiCli\Search;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/omdb-api-cli
 */
class SearchArguments
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
    public const title = 'title';
    /**
     * @link https://github.com/zero-to-prod/omdb-api-cli
     */
    public $title;
}