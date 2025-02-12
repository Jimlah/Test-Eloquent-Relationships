<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    // Added country_id field to fillable
    protected $fillable = ['name', 'size', 'country_id'];

    public function users()
    {
        // TASK: fix this by adding some extra code
        return $this->belongsToMany(User::class)
            ->withPivot(['user_id', 'team_id', 'position', 'created_at']);
    }
}
