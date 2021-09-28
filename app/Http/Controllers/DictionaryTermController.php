<?php
namespace App\Http\Controllers;

use App\Http\Requests\DictionaryTerm\StoreRequest;
use App\Http\Repositories\DictionaryTerm\DictionaryTermRepository;

class DictionaryTermController extends Controller
{
	private $module_path = 'dictionary_terms.';

    private $dictionaryTermRepository;

    /**
     * @param DictionaryTermRepository $dictionaryTermRepository
     * Injects the module repository to this controller.
     *
     */
    public function __construct(DictionaryTermRepository $dictionaryTermRepository)
    {
        $this->dictionaryTermRepository = $dictionaryTermRepository;
    }

    public function index() {
        $dictionary_terms = $this->dictionaryTermRepository->all();
    	return view($this->module_path."index", compact('dictionary_terms'));
    }

    public function create() {
    	return view($this->module_path."create");
    }

    public function store (StoreRequest $request) {
    	try {
	    	$this->dictionaryTermRepository->create($request->all());
            return redirect(route('dictionaries'))->with('success', 'Dictionary Term Created Successfully!');
    	} catch (Exception $e) {
    		return back()->with('error', $e->getMessage());
    	}
    }
}
