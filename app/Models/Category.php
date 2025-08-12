<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    // Fillable attributes
    protected $fillable = [
        'name',
        'description',
    ];

    // Relation to JobListing
    public function jobListings()
    {
        return $this->hasMany(JobListing::class);
    }
}
