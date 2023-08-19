<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class JobApplication extends Model
{

    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }



    protected $fillable = [
        'position',
        'company_name',
        'city',
        'country',
        'channel',
        'applied_on',
        'status',
        'notes',
        'recruiter_name',
        'experience_level',
        'contact_email',
    ];


}
