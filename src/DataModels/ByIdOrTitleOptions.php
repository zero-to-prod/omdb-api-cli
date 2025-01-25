<?php

namespace Zerotoprod\OmdbApiCli\DataModels;

use Zerotoprod\DataModel\DataModel;

class ByIdOrTitleOptions
{
    use DataModel;

    public const apikey = 'apikey';
    public $apikey;
    public const title = 'title';
    public $title = null;
    public const imdbid = 'imdbid';
    public $imdbid = null;
    public const type = 'type';
    public $type = null;
    public const year = 'year';
    public $year = null;
    public const full_plot = 'full_plot';
    public $full_plot = false;
}