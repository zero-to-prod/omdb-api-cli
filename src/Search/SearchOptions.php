<?php

namespace Zerotoprod\OmdbApiCli\Search;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/omdb-api-cli
 */
class SearchOptions
{
    use DataModel;

    /**
     * @link https://github.com/zero-to-prod/omdb-api-cli
     */
    public const type = 'type';
    /**
     * @link https://github.com/zero-to-prod/omdb-api-cli
     */
    public $type = null;
    /**
     * @link https://github.com/zero-to-prod/omdb-api-cli
     */
    public const year = 'year';
    /**
     * @link https://github.com/zero-to-prod/omdb-api-cli
     */
    public $year = null;
    /**
     * @link https://github.com/zero-to-prod/omdb-api-cli
     */
    public const page = 'page';
    /**
     * @link https://github.com/zero-to-prod/omdb-api-cli
     */
    public $page = 1;
}