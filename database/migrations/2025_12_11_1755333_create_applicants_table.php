<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {

            $table->string('APL_ID')->primary();

            // Personal information
            $table->string('APL_FName');
            $table->string('APL_MName');
            $table->string('APL_LName');
            $table->text('APL_Address_1');
            $table->text('APL_Address_2');
            $table->string('APL_Area');
            $table->string('APL_Gender');
            $table->string('APL_Email');
            $table->string('APL_PPhone');
            $table->string('APL_APhone');
            $table->date('APL_DOB');
            $table->string('APL_Age');
            $table->string('APL_Nationality');
            $table->string('APL_BIRTH_PIN');
            $table->string('APL_Birth_File');
            $table->string('APL_ID_TYP');
            $table->string('APL_ID_Number');
            $table->string('APL_ID_File');

            // Education & Skills Background
            $table->string('APL_HLOE');
            $table->string('APL_Employment_Status');

            // Programme Interest
            $table->string('APL_Previously_Participated');
            $table->string('APL_Previously_Participated_Details');
            $table->string('APL_Programme');
            $table->string('APL_Attend');
            $table->text('APL_Experience');
            $table->text('APL_Experience_Details');
            $table->text('APL_Future_Plans');
            $table->text('APL_How_Found_Programme');
            $table->string('APL_How_Found_Programme_Other');

            // Consent & Submission
            $table->string('APL_Disability_Status');
            $table->text('APL_Disability_Details');
            $table->string('APL_Consent_Followup');
            $table->string('APL_Subscribe_Mailing');
            $table->string('APL_Photo_Consent');

            $table->string('APL_Accepts');


            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
