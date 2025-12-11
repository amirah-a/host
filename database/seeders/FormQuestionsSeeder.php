<?php

namespace Database\Seeders;

use App\Models\FormQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            // Pre-requisite
            ['id' => 'APL_Will_Bring_Mirror', 'label' => 'I agree to bring my own freestanding tabletop mirror to participate in this training', 'placeholder' => 'Yes / No', 'field_type' => 'TextInput'],

            // Personal Information
            ['id' => 'APL_FName', 'label' => 'First Name', 'placeholder' => 'First Name', 'field_type' => 'TextInput'],
            ['id' => 'APL_MName', 'label' => 'Middle Name', 'placeholder' => 'Middle Name', 'field_type' => 'TextInput'],
            ['id' => 'APL_LName', 'label' => 'Last Name', 'placeholder' => 'Last Name', 'field_type' => 'TextInput'],
            ['id' => 'APL_Address_1', 'label' => 'Address Line 1', 'placeholder' => 'Street Number and Complete Street', 'field_type' => 'Textarea'],
            ['id' => 'APL_Area', 'label' => 'Address Line 2', 'placeholder' => 'Area (E.g. Cove)', 'field_type' => 'TextInput'],
            ['id' => 'APL_Gender', 'label' => 'Gender', 'placeholder' => 'Male / Female', 'field_type' => 'TextInput'],
            ['id' => 'APL_Email', 'label' => 'Email Address', 'placeholder' => 'example@email.com', 'field_type' => 'TextInput'],
            ['id' => 'APL_PPhone', 'label' => 'Contact Number', 'placeholder' => '868-123-4567', 'field_type' => 'TextInput'],
            ['id' => 'APL_APhone', 'label' => 'Alternative Contact Number', 'placeholder' => '868-123-4567', 'field_type' => 'TextInput'],
            ['id' => 'APL_DOB', 'label' => 'Date of Birth', 'placeholder' => 'mm/dd/yyyy', 'field_type' => 'DatePicker'],
            ['id' => 'APL_Nationality', 'label' => 'Nationality', 'placeholder' => 'Trinidadian', 'field_type' => 'TextInput'],
            ['id' => 'APL_BIRTH_PIN', 'label' => 'Birth Certificate Pin Number', 'placeholder' => 'Enter your Birth Certificate PIN', 'field_type' => 'TextInput'],
            ['id' => 'APL_ID_TYP', 'label' => 'National Identification Card or Trinidad and Tobago Passport', 'placeholder' => 'National ID / Passport', 'field_type' => 'TextInput'],
            ['id' => 'APL_ID_Number', 'label' => 'ID Number', 'placeholder' => 'Enter your ID Number', 'field_type' => 'TextInput'],

            // Education & Skills Background
            ['id' => 'APL_HLOE', 'label' => 'Highest Level of Education (Completed)', 'placeholder' => 'Select your education level', 'field_type' => 'TextInput'],
            ['id' => 'APL_Employment_Status', 'label' => 'Employment Status', 'placeholder' => 'Select your employment status', 'field_type' => 'TextInput'],

            // Programme Interest
            ['id' => 'APL_Programme', 'label' => 'I am interested in attending this course', 'placeholder' => 'Select a cohort', 'field_type' => 'TextInput'],
            ['id' => 'APL_Attend', 'label' => 'Are you able to attend all scheduled sessions of the course?', 'placeholder' => 'Yes / No', 'field_type' => 'TextInput'],
            ['id' => 'APL_Experience', 'label' => 'Do you have any experience in make up?', 'placeholder' => 'Yes / No', 'field_type' => 'Textarea'],
            ['id' => 'APL_Future_Plans', 'label' => 'How do you see this course contribution to your future plans?', 'placeholder' => 'Describe your future plans...', 'field_type' => 'Textarea'],
            ['id' => 'APL_How_Found_Programme', 'label' => 'How did you find out about the programme?', 'placeholder' => 'Select how you heard about us', 'field_type' => 'Textarea'],

            // Consent
            ['id' => 'APL_Consent_Followup', 'label' => 'I consent to be contacted by the Ministry of Sport and Youth Affairs Monitoring & Evaluation Unit up to two (2) years after programme completion for tracer studies.', 'placeholder' => 'Yes / No', 'field_type' => 'TextInput'],
            ['id' => 'APL_Subscribe_Mailing', 'label' => 'Would you like to subscribe to the Ministry\'s mailing list for updates on upcoming projects and programmes?', 'placeholder' => 'Yes / No', 'field_type' => 'TextInput'],
            ['id' => 'APL_Photo_Consent', 'label' => 'I agree to have my photograph or images used by the MSYA for promotion on all media pages.', 'placeholder' => 'Yes / No', 'field_type' => 'TextInput'],
            ['id' => 'APL_Accepts', 'label' => 'I have read and accepted the above', 'placeholder' => 'Yes / No', 'field_type' => 'TextInput'],
        ];

        foreach ($questions as $question) {
            FormQuestion::updateOrCreate(['id' => $question['id']], $question);
        }
    }
}
