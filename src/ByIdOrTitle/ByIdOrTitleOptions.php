<?php

namespace Zerotoprod\OmdbApiCli\ByIdOrTitle;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/omdb-api-cli
 */
class ByIdOrTitleOptions
{
    use DataModel;

    /**
     * @link https://github.com/zero-to-prod/omdb-api-cli
     */
    public const title = 'title';
    /**
     * @link https://github.com/zero-to-prod/omdb-api-cli
     */
    public $title = null;
    /**
     * @link https://github.com/zero-to-prod/omdb-api-cli
     */
    public const imdbid = 'imdbid';
    /**
     * @link https://github.com/zero-to-prod/omdb-api-cli
     */
    public $imdbid = null;
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
    public const full_plot = 'full_plot';
    /**
     * @link https://github.com/zero-to-prod/omdb-api-cli
     */
    public $full_plot = false;
}