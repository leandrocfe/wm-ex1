<div>
    <form wire:submit="submit" class="max-w-2xl mx-auto mt-10">

        <h1 class="py-5 text-2xl">Contact Form</h1>
        {{ $this->form }}

        <x-filament::button class="mt-5" type="submit">Submit</x-filament::button>
    </form>

    <x-filament-actions::modals />
</div>
