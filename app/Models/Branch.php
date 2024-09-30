<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $guarded=[];
    //protected $fillable = [];

    //relacion uno a mucho inversa
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
    //relacion muhcos a muhcos
    public function products(){
        return $this->belongsToMany(Product::class);
    }
       //relacion muhcos a muhcos
       public function suppliers(){
        return $this->belongsToMany(Supplier::class);
    }
    //relacion uno a muchos 
    public function users(){
        return $this->hasMany(User::class);
    }

}
