<x-guest-layout>
    {{"Formulaire de création Option"}}
    
    <form method="POST" class="mt-6" action="{{ route('option.store') }}">
       
        @csrf
        <!-- Name -->
        <div>
            <x-input-label for="nomOption" :value="__("Nom de l'option")" />
            <x-text-input id="nomOption" class="block mt-1 w-full" type="text" name="nomOption" :value="old('nomOption')" required autofocus autocomplete="nom" />
            <x-input-error :messages="$errors->get('nomOption')" class="mt-2" />
        </div>
        <x-input-label for="section" :value="__('Section')" />
        <select name="fk_section" class="border-gray-300 block mt-2 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            @foreach($sections as $item) 
                <option value="{{$item->id}}">{{$item->nom}}</option>
            @endforeach    
        </select>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Enregistrer') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>       
