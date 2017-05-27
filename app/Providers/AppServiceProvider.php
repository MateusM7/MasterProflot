<?php

namespace MasterProflot\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'MasterProflot\Repositories\PeriodoRepository',
            'MasterProflot\Repositories\PeriodoRepositoryEloquent'

            );
         $this->app->bind(
            'MasterProflot\Repositories\ProfessorRepository',
            'MasterProflot\Repositories\ProfessorRepositoryEloquent'

            );
         $this->app->bind(
            'MasterProflot\Repositories\TipoRepository',
            'MasterProflot\Repositories\TipoRepositoryEloquent'

            );
          $this->app->bind(
            'MasterProflot\Repositories\CursoRepository',
            'MasterProflot\Repositories\CursoRepositoryEloquent'

            );
       
        
    }
}
