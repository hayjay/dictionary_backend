<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DictionaryTerm extends Model
{
    use HasFactory;

    protected $fillable = ['word', 'description', 'created_by'];

    public function user() {
    	return $this->belongsTo('App\Models\User', 'created_by');
    }
}
