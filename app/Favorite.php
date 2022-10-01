<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $primaryKey = ['user_id', 'shop_id'];
    public $incrementing = false;
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
		public function shop()
    {
        return $this->belongsTo('App\Shop');
    }
}
