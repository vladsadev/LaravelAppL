<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    use HasFactory;

    protected $table = 'Jobs_listing';

    protected $fillable = ['title', 'salary'];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
//       return $this->belongsToMany(Tag::class,foreignPivotKey:"job_listing_id" ) ;
        return $this->belongsToMany(Tag::class, 'job_tag', 'job_listing_id', 'tag_id');

    }

}


