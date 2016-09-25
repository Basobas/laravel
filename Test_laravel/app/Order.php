<?php
/**
 * Created by PhpStorm.
 * User: Bas
 * Date: 25-9-2016
 * Time: 13:48
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function customer(){
        return $this->belongsTo('App\Customer');
    }
}
