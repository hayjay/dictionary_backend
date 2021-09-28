<?php

namespace App\ServiceProviders\DictionaryTerm;

use Illuminate\Support\ServiceProvider;
use App\Http\Interfaces\DictionaryTerm\DictionaryTermInterface;
use App\Http\Repositories\DictionaryTerm\DictionaryTermRepository;

class DictionaryTermServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(DictionaryTermInterface::class, DictionaryTermRepository::class);
    }
}