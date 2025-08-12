<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;

    // Fillable attributes
    protected $fillable = [
        'name',
        'description',
        'user_id',
    ];

    // Relation to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation to JobListing
    public function jobListings()
    {
        return $this->hasMany(JobListing::class);
    }
}
