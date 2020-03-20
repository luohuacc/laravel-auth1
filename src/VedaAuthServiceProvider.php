<?php

namespace Veda\Auth;

use Illuminate\Support\ServiceProvider;
use Veda\Auth\auth\Test;

class VedaAuthServiceProvider extends ServiceProvider
{

    protected $defer = true; // 延迟加载服务

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // 单例绑定服务
        $this->app->singleton('veda', function ($app) {

            return new Test($app['session'], $app['config']);

        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->publishes([

            __DIR__.'/config/menu.php' => config_path('menu.php'), // 发布配置文件到 laravel 的config 下

        ]);
    }

    public function provides()
    {

        // 因为延迟加载 所以要定义 provides 函数 具体参考laravel 文档

        return ['veda'];

    }
}
