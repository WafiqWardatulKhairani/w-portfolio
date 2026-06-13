<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name',
        'year',
        'role',
        'contribution_status',
        'description',
        'github_url',
        'demo_url',
        'is_featured'
    ];
}
