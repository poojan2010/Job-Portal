<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyJob extends Model
{
    use HasFactory;
    protected $table = 'applyjobs';
    protected $fillable = ['cv','job_id','user_id'];
}
