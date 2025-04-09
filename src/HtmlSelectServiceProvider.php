<?php

namespace Flux\HtmlSelect;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class HtmlSelectServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'html-select');

        // Register Livewire component
        Livewire::component('html-select::select-demo', \Flux\HtmlSelect\SelectDemo::class);

        // Optionally publish views
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/html-select'),
        ], 'html-select-views');
    }

    public function register(): void
    {
        // You can bind things to the container here if needed
    }
}
