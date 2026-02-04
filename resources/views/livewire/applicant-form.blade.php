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

            <p><strong class="text-red-500"> DISCLAIMER:</strong> Kindly note that completing the registration does not mean you are accepted for the programme. Only shortlisted participants will be contacted.</p>
        </div>

    </div>
    <form wire:submit="create">
        {{ $this->form }}

        <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-200 mt-4" type="submit">
            Submit
        </button>
    </form>

    <x-filament-actions::modals />
</div>
