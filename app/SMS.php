<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SMS extends Model
{
   protected $table='sms';
   protected $fillable = [
        'sms',
    ];
    		public function user()
    		{
    				return  $this->belongsTo(User::class);;
    		}
}
