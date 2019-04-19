<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    
    protected $fillable = ['code', 'name', 'razon_social', 'nickname', 'email', 'birth_date', 'reference', 'cp', 'cuit', 'tax'];
 

    public function address()
    {
    	return $this->belongsTo(Address::class);
    }
}
