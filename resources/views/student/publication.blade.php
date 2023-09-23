
    <x-guest-layout>
        {{"Formulaire de publicacion de votre travail"}}
        <form method="POST" class="mt-6" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div>
                <x-input-label for="sujet" :value="__('Sujet')" />
                <textarea name="sujet" required id="" cols="5" rows="5" class="border-gray-300 block mt-2 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"></textarea>
            </div>
            <div>
                <x-input-label for="description" :value="__('Description')" />
                <textarea name="description" required id="" cols="10" rows="5" class="border-gray-300 block mt-2 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"></textarea>
            </div>
            <div>
                <div class="mb-3">
                    <x-input-label for="postnom" :value="__('Fichier')" />
                    <input
                      class="block mt-2 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600  shadow-sm"
                      type="file"
                      id="formFileMultiple"
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
   