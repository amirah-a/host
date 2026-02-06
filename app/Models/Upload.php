<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Applicant;

class Upload extends Model
{
    // Define the custom table name if it differs from 'uploads'
    protected $table = 'uploads';

    // Set the custom primary key
    protected $primaryKey = 'id';

    // Since your ID is a smallInteger, specify it's an integer
    // and if it's auto-incrementing (true by default)
    protected $keyType = 'int';
    public $incrementing = true;

    protected $fillable = [
        'APL_ID',
        'file_name',
        'file_path',
        'file_type',
    ];

    /**
     * Get the applicant that owns the upload.
     */
    public function applicant(): BelongsTo
    {
        // Replace 'Applicant' with your parent model name
        // Specify 'APL_ID' as the foreign key
        return $this->belongsTo(Applicant::class, 'APL_ID');
    }
}
