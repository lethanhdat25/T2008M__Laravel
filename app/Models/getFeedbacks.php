<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class getFeedbacks extends Model
{
    use HasFactory;
    protected $table="get_feedbacks";
    protected $fillable=[
        "name",
        "email",
        "telephone",
        "feedback"
    ];
}
