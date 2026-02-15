<div class="py-8">
    <div class="bg-gradient-to-r from-teal-50 to-purple-50 border border-teal-200 rounded-lg p-6 mb-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">H.O.S.T</h1>
        <h2 class="text-xl font-semibold text-teal-600 mb-4 italic">"Hospitality Operations and Service Training"</h2>

        <div class="prose prose-gray max-w-none">
            <p class="text-gray-700 leading-relaxed mb-4">
                The Ministry of Sport and Youth Affairs (MSYA), is pleased to invite young people to register for a one-week, hands-on, industry-standard training experience in the Food and Beverage Service industry.
            </p>

            <ul class="list-disc pl-6 text-gray-700 mb-4">
                <li>Participants must be between the ages of 18–35 years</li>
                <li>Selected participants are required to wear a white shirt and black pants or a skirt for practical sessions.</li>
            </ul>

            <p class="font-bold italic">
                <br><strong class="text-red-500">DISCLAIMER: </strong>
                Completing the registration does not mean you are accepted for the programme. Only shortlisted participants will be contacted.
            </p>
        </div>
    </div>

    <form id="applicant-form" wire:submit.prevent="create">
        {{ $this->form }}

        <!-- Submit button -->
        <button
            type="submit"
            id="submit-button"
            class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-200 mt-4 flex items-center justify-center"
        >
            <!-- Spinner, hidden by default -->
            <svg id="button-spinner" class="hidden animate-spin h-5 w-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
            </svg>

            <!-- Button text -->
            <span id="submit-text">Submit</span>
        </button>
    </form>

    <x-filament-actions::modals />

    <!-- Persistent spinner logic -->
    <script>
        const form = document.getElementById('applicant-form');
        const spinner = document.getElementById('button-spinner');
        const submitText = document.getElementById('submit-text');
        const submitButton = document.getElementById('submit-button');

        form.addEventListener('submit', () => {
            // Disable the button to prevent double submission
            submitButton.disabled = true;

            // Show spinner and change text
            spinner.classList.remove('hidden');
            submitText.textContent = 'Submitting...';
        });

        // Optional: keep spinner visible during browser navigation
        window.addEventListener('beforeunload', () => {
            spinner.classList.remove('hidden');
            submitText.textContent = 'Submitting...';
        });
    </script>
</div>
