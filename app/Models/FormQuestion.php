<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormQuestion extends Model
{
    protected $table = 'form_questions';

    public $timestamps = false;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['id', 'label', 'placeholder', 'field_type'];

    public static function getFieldLabel($field)
    {
        return FormQuestion::where('id', $field)->value('label') ?? $field;
    }
}
