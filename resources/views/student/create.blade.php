<x-guest-layout>
    {{"Formulaire de création Étudiant"}}
    
    <form method="POST" class="mt-6" action="{{ route('student.store') }}">
       
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
        <x-input-label for="promotion" :value="__('Promotion')" />
        <select name="fk_promotion" class="border-gray-300 block mt-2 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            @foreach($promotions as $item) 
                <option value="{{$item->id}}">{{$item->abreviation}}</option>
            @endforeach
        </select>
        <x-input-label for="section" :value="__('Section')" />
        <select name="fk_section" class="border-gray-300 block mt-2 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            @foreach($sections as $item) 
                <option value="{{$item->id}}">{{$item->nom}}</option>
            @endforeach    
        </select>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Enregistrer') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
