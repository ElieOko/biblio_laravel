
    <x-guest-layout>
        {{"Formulaire de publicacion de votre travail"}}
        <form method="POST" class="mt-6" enctype="multipart/form-data" action="{{ route('student.publication') }}">
            @csrf
            <!-- Name -->
            <x-input-label for="categorie" :value="__('Categorie')" />
            <select name="categorie" class="border-gray-300 block mt-2 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                @foreach($all_categorie as $item) 
                <option value="{{$item->id}}">{{$item->nom}}</option>
                @endforeach
            </select>
            <div>
                <x-input-label for="sujet" :value="__('Sujet')" />
                <textarea name="sujet" required id="" cols="2" rows="2" class="border-gray-300 block mt-2 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"></textarea>
            </div>
            <div>
                <x-input-label for="description" :value="__('Description')" />
                <textarea name="description" required id="" cols="10" rows="5" class="border-gray-300 block mt-2 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"></textarea>
            </div>
            <div>
                <x-input-label for="nom" :value="__('Nom du directeur')" />
                <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
                <x-input-error :messages="$errors->get('nom')" class="mt-2" />
            </div>
            <div>
                <div class="mb-3">
                    <x-input-label for="file" :value="__('Fichier')" />
                    <input accept=".pdf,.docx,.doc"
                      class="block mt-2 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600  shadow-sm"
                      type="file"
                      name="file"
                      id="file"
                      required />
                  </div>
            </div>
            <div>
                <input type="checkbox" name="autorisation" checked disabled id="">
                <label for="">Autorisation accordée pour publiér votre travail</label>
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    {{ __('Publier') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>
   