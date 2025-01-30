<?php

namespace Zerotoprod\OmdbApiCli\Search;

use Zerotoprod\DataModel\DataModel;

class SearchOptions
{
    use DataModel;

    public const type = 'type';
    public $type = null;
    public const year = 'year';
    public $year = null;
    public const page = 'page';
    public $page = 1;
}