<?php

namespace Zerotoprod\OmdbApiCli\Search;

use Zerotoprod\DataModel\DataModel;

class SearchArguments
{
    use DataModel;

    public const apikey = 'apikey';
    public $apikey;
    public const title = 'title';
    public $title;
}