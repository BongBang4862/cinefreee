<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $date =['deleted_at'];
    protected $table ='movies';
    protected $hidden =['created_at','update_at'];

    public function links()
    {
        return $this->hasMany(Link::class);
    }

    public function categories()
    {
        return $this->hasMany(Category_Movies::class);
    }
}
