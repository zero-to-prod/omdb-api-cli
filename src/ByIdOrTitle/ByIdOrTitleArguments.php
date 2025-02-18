<?php

namespace Zerotoprod\OmdbApiCli\ByIdOrTitle;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/omdb-api-cli
 */
class ByIdOrTitleArguments
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
}