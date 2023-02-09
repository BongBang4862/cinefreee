<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_Movies extends Model
{
    use HasFactory;
    protected $date =['deleted_at'];
    protected $table ='category_movies';
    protected $hidden =['created_at','update_at'];
    
}
