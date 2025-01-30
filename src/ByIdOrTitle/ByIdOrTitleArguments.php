<?php

namespace Zerotoprod\OmdbApiCli\ByIdOrTitle;

use Zerotoprod\DataModel\DataModel;

class ByIdOrTitleArguments
{
    use DataModel;

    public const apikey = 'apikey';
    public $apikey;
}