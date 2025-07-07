<?php

// namespaces are used to reference classes. For example, to reference the Ninja class, you would use App\Models\Ninja.
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ninja extends Model
{
    // Attributes that can be assigned during ninja creation.
    protected $fillable = [
        "name",
        "skill",
        "bio",
        // The dojo_id is a foreign key that references the Dojo model.
        "dojo_id",
    ];

    /** @use HasFactory<\Database\Factories\NinjaFactory> */
    use HasFactory;
}
