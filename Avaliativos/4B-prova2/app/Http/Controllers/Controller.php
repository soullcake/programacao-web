<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\Avaliacao;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use Avaliacao;

    public function __construct()
    {
        $this->avaliacao();
    }
}
