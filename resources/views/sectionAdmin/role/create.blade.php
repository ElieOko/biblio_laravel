<x-guest-layout>
    {{"Formulaire de création Role Utilisateur"}}
    <form method="POST" class="mt-6" action="{{ route('role.store') }}">
        @csrf
        <!-- Name -->
        <div>
            <x-input-label for="nom" :value="__('Nom du role')" />
            <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Sauvegarder') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>