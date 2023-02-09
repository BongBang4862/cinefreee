<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $date =['deleted_at'];
    protected $table ='links_movies';
    protected $hidden =['created_at','update_at'];
    
}
