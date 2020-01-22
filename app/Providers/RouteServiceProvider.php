<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //customes
        $this->mapSudoRoutes();

        $this->mapAdminRoutes();

        $this->mapPemdesRoutes();

        $this->mapBumdesRoutes();

        $this->mapMemberRoutes();

    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    protected function mapSudoRoutes()
    {
        Route::prefix('sudo')
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/sudo/web.php'));
    }
    protected function mapAdminRoutes()
    {
        Route::prefix('administrator')
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/admin/web.php'));
    }
    protected function mapPemdesRoutes()
    {
        Route::prefix('pemdes')
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/pemdes/web.php'));
    }
    protected function mapBumdesRoutes()
    {
        Route::prefix('bumdes')
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/bumdes/web.php'));
    }
    protected function mapMemberRoutes()
    {
        Route::prefix('member')
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/frontend/web.php'));
    }



    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }


}
