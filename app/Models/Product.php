<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];
    //protected $fillable = [];

//relacion uno a muchos inversa
    public function category(){
        return $this->hasMany(Category::class);
    }
//relacion uno a muchos inversa
    public function supplier(){
        return $this->hasMany(Supplier::class);
    }
//relacion muchos a muchos
    public function tickets (){
        return $this->belongsToMany(Ticket::class);
    }
    //relacion muchos a muhcos
    public function branches(){
        return $this->belongsToMany(Branch::class);
    }
}
