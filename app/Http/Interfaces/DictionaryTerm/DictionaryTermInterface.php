<?php

namespace App\Http\Interfaces\DictionaryTerm;

interface DictionaryTermInterface
{
    public function create(array $request);
    public function all();
}
