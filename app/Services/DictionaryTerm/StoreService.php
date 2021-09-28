<?php
namespace App\Services\DictionaryTerm;

use App\Models\DictionaryTerm;

class StoreService
{

    public function store($data) : object {
    	return DictionaryTerm::create([
    		'word' => $data['word'],
    		'description' => $data['description'],
    		'created_by' => auth()->user()->id,
    	]);
    }

}


 ?>