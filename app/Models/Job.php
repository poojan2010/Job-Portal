<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['title','company_name','experience','salary','city_id'];

   /* public function city()
    {
        return $this->belongsTo(City::class,'city_id','id');
    }*/
}
