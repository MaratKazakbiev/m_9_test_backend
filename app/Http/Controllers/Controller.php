<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Traits\ResponseTrait;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    use ResponseTrait;
}
