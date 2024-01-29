<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'password',
        'whatsapp',
        'email',
        'nationality',
        'language_speak',
        'dob',
        'highest_education',
        'documentation',
        'experience',
        'terms_and_conditions_id',
        'accepted_time',
        'active',
        'image',
    ];

    protected $dates = [
        'dob', // Date of Birth
        'accepted_time', // Accepted Time
    ];

    protected $casts = [
        'documentation' => 'boolean', // Assuming 'documentation' is intended to be boolean
        'active' => 'boolean',
    ];

    public function termsAndConditions()
    {
        return $this->belongsTo(TermsAndConditions::class, 'terms_and_conditions_id', 'id');
    }
}
