<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'password'
    ];

    public function products(){
        return $this->belongsToMany(Product::class, 'product__user', 'user_id', 'product_id');
    }
}
