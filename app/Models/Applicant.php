<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $table = 'applications';

    protected $primaryKey = 'APL_ID';

    protected $fillable = [
        // Pre-requisite
        'APL_Will_Bring_Mirror',

        // Personal information
        'APL_FName',
        'APL_MName',
        'APL_LName',
        'APL_Address_1',
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
        'APL_ID_File',
        'APL_ID_Number',

        // Education & Skills Background
        'APL_HLOE',
        'APL_Employment_Status',

        // Programme Interest
        'APL_Programme',
        'APL_Attend',
        'APL_Experience',
        'APL_Future_Plans',
        'APL_How_Found_Programme',
        'APL_How_Found_Programme_Other',

        // Consent
        'APL_Consent_Followup',
        'APL_Subscribe_Mailing',
        'APL_Photo_Consent',
        'APL_Accepts',
    ];

    protected $casts = [
        'APL_DOB' => 'date',
    ];
}
