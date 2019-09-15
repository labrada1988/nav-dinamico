<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('nav', function ($view) {
            $arr = array(
                [
                    "btn" => "Link 1",
                    "route" =>  "",
                    "child" => NULL
                ],
                [
                    "btn" => "Link 2",
                    "route" =>  "link2",
                    "child" => NULL
                ],
                [
                    "btn" => "Mas links",
                    "child" => array(
                                        [
                                            "btn" => "Link 3",
                                            "route" =>  "link3",
                                            "child" => NULL
                                        ],
                                        [
                                            "btn" => "Link 4",
                                            "route" =>  "link4",
                                            "child" => NULL
                                        ],
                                        [
                                            "btn" => "Link 5",
                                            "route" =>  "link5",
                                            "child" => NULL
                                        ],
                                    )
                ]
            );
            $view->with("menu", $arr);
        });
    }
}
