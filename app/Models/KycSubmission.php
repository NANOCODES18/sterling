<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KycSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'full_name',
        'dob',
        'address',
        'id_document_path',
        'status'
    ];

    // Relationship: Each KYC submission belongs to one user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
