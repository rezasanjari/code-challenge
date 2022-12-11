<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *   version="2.0",
 *   title="Binogi Code Challenge API",
 *   description="Binogi Code Challenge API - OpenAPI Description",
 *   @OA\Contact(email="ops@binogi.com")
 * )
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST
 * )
 *
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
