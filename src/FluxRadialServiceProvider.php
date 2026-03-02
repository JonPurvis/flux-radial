<?php

namespace FluxRadial;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FluxRadialServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerBladeComponents();
    }

    protected function registerBladeComponents(): void
    {
        Blade::anonymousComponentPath(
            __DIR__.'/../resources/views/flux',
            'flux'
        );
    }
}
