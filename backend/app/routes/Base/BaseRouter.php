<?php

namespace App\Routes\Base;

use App\Http\Controllers\BaseController;
use App\Routes\IRouter;
use Illuminate\Support\Facades\Route;

class BaseRouter implements IRouter
{
    public function createRoutes() : void
    {
        Route::prefix('api')->group(static function () {
            Route::get('/base', BaseController::class . '@index')->name('api.base');
        });
    }
}
