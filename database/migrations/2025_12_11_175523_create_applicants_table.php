<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->smallInteger('APL_ID')->primary();
            
            // Pre-requisite
            $table->string('APL_Will_Bring_Mirror', 1)->nullable();
            
            // Personal information
            $table->string('APL_FName', 100)->nullable();
            $table->string('APL_MName', 100)->nullable();
            $table->string('APL_LName', 100)->nullable();
            $table->text('APL_Address_1')->nullable();
            $table->string('APL_Area', 100)->nullable();
            $table->string('APL_Gender', 20)->nullable();
            $table->string('APL_Email', 150)->nullable();
            $table->string('APL_PPhone', 50)->nullable();
            $table->string('APL_APhone', 50)->nullable();
            $table->date('APL_DOB')->nullable();
            $table->string('APL_Nationality', 40)->nullable();
            $table->string('APL_BIRTH_PIN', 100)->nullable();
            $table->string('APL_ID_TYP', 50)->nullable();
            $table->string('APL_ID_Number', 100)->nullable();
            
            // Education & Skills Background
            $table->string('APL_HLOE', 100)->nullable();
            $table->string('APL_Employment_Status', 50)->nullable();
            
            // Programme Interest
            $table->string('APL_Programme', 30)->nullable();
            $table->string('APL_Attend', 1)->nullable();
            $table->text('APL_Experience')->nullable();
            $table->string('APL_Future_Plans')->nullable();
            $table->text('APL_How_Found_Programme')->nullable();
            
            // Consent
            $table->string('APL_Consent_Followup', 20)->nullable();
            $table->string('APL_Subscribe_Mailing', 20)->nullable();
            $table->string('APL_Photo_Consent', 20)->nullable();
            $table->string('APL_Accepts', 20)->nullable();
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('applications');
    }
};
