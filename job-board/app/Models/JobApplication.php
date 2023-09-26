<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobApplication extends Model
{
    use HasFactory;



    protected $fillable=['expected_salary','job_id','user_id','cv_path'];

    public function job():BelongsTo
    {
      return $this->belongsTo(Job::class);
    }

    public function user():BelongsTo
    {
      return $this->belongsTo(User::class);
    }
}
