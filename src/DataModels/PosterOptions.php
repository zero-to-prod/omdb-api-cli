<?php

namespace Zerotoprod\OmdbApiCli\DataModels;

use Zerotoprod\DataModel\DataModel;

class PosterOptions
{
    use DataModel;

    public const apikey = 'apikey';
    public $apikey;
    public const imdbid = 'imdbid';
    public $imdbid;
}