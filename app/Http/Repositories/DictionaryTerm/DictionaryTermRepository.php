<?php
namespace App\Http\Repositories\DictionaryTerm;

use App\Http\Interfaces\DictionaryTerm\DictionaryTermInterface;
use App\Models\DictionaryTerm;
use App\Services\DictionaryTerm\StoreService;

class DictionaryTermRepository implements DictionaryTermInterface
{
    private $dictionary_term;

    public function __construct(DictionaryTerm $dictionary_term) {
        $this->dictionary_term = $dictionary_term;
    }

    public function create($data)
    {
        return (new StoreService($this->dictionary_term))->store($data);
    }

    public function all() : object
    {
        return $this->dictionary_term::with('user')
                                ->orderBy('word', 'asc')
                                ->paginate(5);
    }
}