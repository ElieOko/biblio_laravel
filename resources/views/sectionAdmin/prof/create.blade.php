<x-guest-layout>
    {{"Formulaire de création Prof"}}
    <form method="POST" class="mt-6" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div>
            <x-input-label for="matricule" :value="__('Matricule')" />
            <x-text-input id="matricule" class="block mt-1 w-full" type="text" name="matricule" :value="old('matricule')" required autofocus autocomplete="matricule" />
            <x-input-error :messages="$errors->get('matricule')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="nom" :value="__('Nom')" />
            <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="postnom" :value="__('Postnom')" />
            <x-text-input id="postnom" class="block mt-1 w-full" type="text" name="postnom" :value="old('postnom')" required autofocus autocomplete="postnom" />
            <x-input-error :messages="$errors->get('postnom')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="prenom" :value="__('Prenom')" />
            <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="prenom" />
            <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
        </div>
        <x-input-label for="genre" :value="__('Genre')" />
        <select name="genre" class="border-gray-300 block mt-2 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            <option value="M">M</option>
            <option value="F">F</option>
        </select>
        <x-input-label for="grade" :value="__('Grade')" />
        <select name="grade" class="border-gray-300 block mt-2 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            @foreach($grades as $grade)
                <option value="{{$grade->id}}">{{$grade->nom}}</option>
            @endforeach
        </select>
       
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Enregistrer') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
