<x-guest-layout>
    {{"Formulaire de création Promotion"}}
    <form method="POST" class="mt-6" action="{{ route('promotion.store') }}">
        @csrf
        <!-- Name -->
        <x-input-label for="section" :value="__('Section')" />
        <select name="section" class="border-gray-300 block mt-2 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            @foreach($sections as $item) 
            <option value="{{$item->id}}">{{$item->nom}}</option>
            @endforeach
        </select>
        <div>
            <x-input-label for="nom" :value="__('Nom de la promotion')" />
            <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="abreviation" :value="__('Abreviation')" />
            <x-text-input id="abreviation" class="block mt-1 w-full" type="text" name="abreviation" :value="old('abreviation')" required autofocus autocomplete="abreviation" />
            <x-input-error :messages="$errors->get('abreviation')" class="mt-2" />
        </div>
        <div class="mt-6">
            <input type="checkbox"  name="isTerminal" >
            <label for="">Cocher l'option si la promotion concerne l'année terminal</label>
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Sauvegarder') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>