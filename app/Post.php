<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	// Table Name
	//protected $table = 'post';
	// Primary key
	//public $primaryKet = 'item_id';
	// Timestampos
	//public $timestamps = true;

	// Relationships
	public function user(){
		return $this->belongsTo('App\User');
	}
}
