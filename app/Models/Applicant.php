<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Applicant extends Model
{
    protected $table = 'applications';

    protected $primaryKey = 'APL_ID';

    protected $fillable = [
        // Personal information
        'APL_FName',
        'APL_MName',
        'APL_LName',
        'APL_Address_1',
        'APL_Address_2',
        'APL_Area',
        'APL_Gender',
        'APL_Email',
        'APL_PPhone',
        'APL_APhone',
        'APL_DOB',
        'APL_Nationality',
        'APL_BIRTH_PIN',
        'APL_Birth_File',
        'APL_ID_TYP',
        'APL_ID_Number',
        'APL_ID_File',

        // Education & Skills Background
        'APL_HLOE',
        'APL_Employment_Status',
        'APL_Academic_Certificates_File',
        'APL_Academic_Certificates_File_Names',


        // Programme Interest
        'APL_Previously_Participated',
        'APL_Previously_Participated_Details',
        'APL_Programme',
        'APL_Attend',
        'APL_Experience',
        'APL_Experience_Details',
        'APL_Future_Plans',
        'APL_How_Found_Programme',
        'APL_How_Found_Programme_Other',

        // Consent & Disability
        'APL_Disability_Status',
        'APL_Disability_Details',
        'APL_Consent_Followup',
        'APL_Subscribe_Mailing',
        'APL_Photo_Consent',
        'APL_Accepts',
    ];

    protected $casts = [
        'APL_DOB' => 'date',
        'APL_Academic_Certificates_File' => 'array',
        'APL_Academic_Certificates_File_Names' => 'array',
    ];

    public function uploads(): HasMany
    {
        return $this->hasMany(Upload::class, 'APL_ID');
    }
}
