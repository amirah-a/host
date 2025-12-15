<div>
    <div class="bg-gradient-to-r from-teal-50 to-purple-50 border border-teal-200 rounded-lg p-6 mb-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Creative Faces</h1>
        <h2 class="text-xl font-semibold text-teal-600 mb-4 italic">"Youth Empowerment Through Makeup Artistry"</h2>
        
        <div class="prose prose-gray max-w-none">
            <p class="text-gray-700 leading-relaxed mb-4">
                The Ministry of Sport and Youth Affairs, in partnership with <strong>Sacha Cosmetics Ltd.</strong>, invites young people to join a
                two-day introductory workshop in Makeup Artistry—a creative, hands-on experience focused on developing new skills and
                confidence under professional mentorship.
            </p>
            
            <p>Participants must bring a freestanding tabletop mirror for use during the training.</p>

            <p>Participants must be 18 to 35 years old.</p>
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
