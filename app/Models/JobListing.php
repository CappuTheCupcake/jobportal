<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    /** @use HasFactory<\Database\Factories\JobListingFactory> */
    use HasFactory;

    // Fillable attributes
    protected $fillable = [
        'title',
        'description',
        'company_id',
        'category_id',
    ];

    // Relation to Company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // Relation to Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
