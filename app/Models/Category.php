<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $date =['deleted_at'];
    protected $table ='categories';
    protected $hidden =['created_at','update_at'];
    
   
}
