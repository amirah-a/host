<?php

namespace App\Livewire;

use App\Models\Applicant;
use M21\Formkit\Support\FormQuestionBuilder;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Text;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Schemas\Schema;
use Illuminate\Contracts\View\View;
use Illuminate\Support\HtmlString;
use Livewire\Component;
use Livewire\Attributes\Layout;


#[Layout('layouts.app')]
class ApplicantForm extends Component implements HasActions, HasSchemas
{
    use InteractsWithActions;
    use InteractsWithSchemas;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Wizard::make([
                    // Step 1: Personal Information
                    Step::make('Personal Information')
                        ->description('Your details and contact information')
                        ->schema([
                            Group::make([
                                FormQuestionBuilder::make(TextInput::class, 'APL_FName'),
                                FormQuestionBuilder::make(TextInput::class, 'APL_MName'),
                                FormQuestionBuilder::make(TextInput::class, 'APL_LName'),
                            ])->columns(3)
                            ->columnSpanFull(),
                            FormQuestionBuilder::make(Textarea::class, 'APL_Address_1')
                                ->columnSpanFull(),
                            FormQuestionBuilder::make(TextInput::class, 'APL_Area'),
                            FormQuestionBuilder::make(TextInput::class, 'APL_Gender'),
                            FormQuestionBuilder::make(TextInput::class, 'APL_Email'),
                            FormQuestionBuilder::make(TextInput::class, 'APL_PPhone'),
                            FormQuestionBuilder::make(TextInput::class, 'APL_APhone'),
                            FormQuestionBuilder::make(DatePicker::class, 'APL_DOB'),
                            FormQuestionBuilder::make(TextInput::class, 'APL_Nationality'),
                            FormQuestionBuilder::make(TextInput::class, 'APL_BIRTH_PIN'),
                            FormQuestionBuilder::make(TextInput::class, 'APL_ID_TYP'),
                            FormQuestionBuilder::make(TextInput::class, 'APL_ID_Number'),
                        ])
                        ->columns(2),

                    // Step 2: Programme Details
                    Step::make('Programme Details')
                        ->description('Education, experience and programme selection')
                        ->schema([
                            FormQuestionBuilder::make(TextInput::class, 'APL_HLOE'),
                            FormQuestionBuilder::make(TextInput::class, 'APL_Employment_Status'),
                            FormQuestionBuilder::make(TextInput::class, 'APL_Programme'),
                            FormQuestionBuilder::make(TextInput::class, 'APL_Attend'),
                            FormQuestionBuilder::make(Textarea::class, 'APL_Experience')
                                ->columnSpanFull(),
                            FormQuestionBuilder::make(Textarea::class, 'APL_Future_Plans')
                                ->columnSpanFull(),
                            FormQuestionBuilder::make(Textarea::class, 'APL_How_Found_Programme')
                                ->columnSpanFull(),
                        ])
                        ->columns(2),

                    // Step 3: Consent & Submission
                    Step::make('Consent & Submission')
                        ->description('Review and consent')
                        ->schema([
                            FormQuestionBuilder::make(Checkbox::class, 'APL_Consent_Followup'),
                            FormQuestionBuilder::make(Checkbox::class, 'APL_Subscribe_Mailing'),
                            FormQuestionBuilder::make(Checkbox::class, 'APL_Photo_Consent'),
                            Fieldset::make('NOTE')
                            ->schema([
                                Text::make(new HtmlString('<strong>You must read and accept the following:</strong><br> I hereby declare that the information given in this application is true and correct to the best of my knowledge and belief. If any information given in this application proves to be false or incorrect, I accept the consequences of automatic rejection of the submission and that I may be liable for any breach of the applicable Laws of the Republic of Trinidad and Tobago.')),
                                FormQuestionBuilder::make(Checkbox::class, 'APL_Accepts'),
                            ])->columnSpanFull()
                            ->columns(1),
                        ]),
                ])
                ->skippable(),
            ])
            ->statePath('data')
            ->model(Applicant::class);
    }

    public function create(): void
    {
        $data = $this->form->getState();

        dd($data);
        
        $record = Applicant::create($data);

        $this->form->model($record)->saveRelationships();
    }

    public function render(): View
    {
        return view('livewire.applicant-form');
    }
}
