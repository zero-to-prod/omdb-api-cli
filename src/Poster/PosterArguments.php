<?php

namespace Zerotoprod\OmdbApiCli\Poster;

use Zerotoprod\DataModel\DataModel;

class PosterArguments
{
    use DataModel;

    public const apikey = 'apikey';
    public $apikey;
    public const imdbid = 'imdbid';
    public $imdbid;
}