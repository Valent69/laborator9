<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['nume','prenume','group_id'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
