<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Liste de toutes les sections') }}
        </h2>
    </x-slot>
    <div class="flex-none w-full max-w-full px-3 mt-6">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
          <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
            <h6 class="mb-1">Sections</h6>
            <p class="leading-normal text-sm">Effectif {{$sections->count()}}</p>
          </div>
          <div class="flex-auto p-4 mb-2">
            <div class="flex flex-wrap -mx-3 ">  
              @foreach($sections as $section)
              <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-4 xl:w-3/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                  <div class="flex-auto px-1 pt-6">
                    <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">#Section {{$section->nom}}</p>
                    <p class="mb-6 leading-normal text-sm">Cette section comprends un effectif de <span class="text-blue-500">{{$section->etudiant->count()}}</span> Étudiants toutes promotions confondus.</p>
                    <div class="flex items-center justify-between">
                      <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-orange-500 text-orange-500 hover:border-orange-500 hover:bg-transparent hover:text-orange-500 hover:opacity-75 hover:shadow-none active:bg-orange-500 active:text-orange-500 active:hover:bg-transparent active:hover:text-orange-500">Details</button>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                <div class="relative flex flex-col h-full min-w-0 break-words bg-transparent border border-solid shadow-none rounded-2xl border-slate-100 bg-clip-border">
                  <div class="flex flex-col justify-center flex-auto p-6 text-center">
                    <a href="/section/create">
                      <i class="mb-4 fa fa-plus text-slate-400"></i>
                      <h5 class="text-slate-400">Ajouter une Section</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
</x-app-layout>