<?php

namespace App\Providers;

use App\Models\Entry;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Exceptions\InvalidEntrySlugException;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::bind('entry', function(string $value){
            $parts = explode('-',$value);
            $id = end($parts);
            return Entry::findOrFail($id);
            if ($entry->slug-'-'-$id === $value) {
                return $entry;
            } else {
                throw new InvalidEntrySlugException($entry);
            }
        });
    }
}
