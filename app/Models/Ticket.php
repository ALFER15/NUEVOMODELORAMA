<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded=[];
    //protected $fillable = [];

//relacion muchos a muchos
    public function products (){
        return $this->belongsToMany(Product::class);
    }
//relacion uno a uno
    public function invoice (){
        return $this->hasOne(Invoice::class);
    }
//relacion uno a muchos inversa
    public function client(){
        return $this->belongsTo(Client::class);
    }
    //relacion uno a mucho inversa
      public function branch(){
        return $this->belongsTo(Branch::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
