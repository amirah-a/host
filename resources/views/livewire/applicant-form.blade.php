<div>
    <form wire:submit="create">
        {{ $this->form }}

        <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-200 mt-4" type="submit">
            Submit
        </button>
    </form>

    <x-filament-actions::modals />
</div>
