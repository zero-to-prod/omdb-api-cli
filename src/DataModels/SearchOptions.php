<?php

namespace Zerotoprod\OmdbApiCli\DataModels;

use Zerotoprod\DataModel\DataModel;

class SearchOptions
{
    use DataModel;

    public const apikey = 'apikey';
    public $apikey;
    public const title = 'title';
    public $title;
    public const type = 'type';
    public $type = null;
    public const year = 'year';
    public $year = null;
    public const page = 'page';
    public $page = 1;
}