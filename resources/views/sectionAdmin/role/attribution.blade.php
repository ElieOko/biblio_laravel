<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Attribution role ') }}
        </h2> 
    </x-slot>
<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-left text-sm font-light">
            <thead class="border-b font-medium dark:border-neutral-500">
              <tr>
                <th scope="col" class="px-6 py-4">#</th>
                <th scope="col" class="px-6 py-4">Nom</th>
                <th scope="col" class="px-6 py-4">Prenom</th>
                <th scope="col" class="px-6 py-4">Postnom</th>
                <th scope="col" class="px-6 py-4">role</th>
                <th scope="col" class="px-6 py-4">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                <td class="whitespace-nowrap px-6 py-4">Mark</td>
                <td class="whitespace-nowrap px-6 py-4">Otto</td>
                <td class="whitespace-nowrap px-6 py-4">@mdo</td>
                <td class="whitespace-nowrap px-6 py-4">Otto</td>
                <td class="whitespace-nowrap px-6 py-4">Otto</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>