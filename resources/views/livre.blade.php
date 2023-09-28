<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nombres des travaux publiés ') . count($all) }}
        </h2>
        
    </x-slot>
	
	<div class="flex flex-wrap justify-between pt-12 -mx-6">
		@foreach($all as $livre)
	<div class=" w-full md:w-1/3 p-10 flex flex-col flex-grow flex-shrink">
	
		<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
			<div href="#" class="flex flex-wrap no-underline hover:no-underline pt-4">
				<img src="images/PDF_file_icon.svg" class="h-64 w-full rounded-t pb-6 ">
			@php
				$student = ($allStudent->where("id",$livre->fk_etudiant)->get())[0];
				$nom_complet = $student->nom ." ". $student->postnom." ".$student->prenom;
			@endphp
				<p class="w-full text-gray-600 text-xl md:text-xl px-6 uppercase">{{$nom_complet}}</p>
				<div class="w-full font-bold text-xl text-gray-900 px-6">{{$livre->nom}}</div>
				<div class="w-full font-bold text-xl text-gray-900 px-6">	<p>Directeur : {{$livre->prof}}</p></div>
				<div class="w-full font-bold text-xl text-blue-900 px-6">	<p>Categorie : {{($categorie->where("id",$livre->fk_categorie)->get())[0]->nom}}</p></div>

			
				<br>
				<p class="text-gray-800 font-serif text-base px-6 mb-5">
					{{$livre->description}}
				</p>
				<div>
					<iframe src="{{"storage/".$livre->fichier}}" frameborder="0"></iframe>
				</div>
				
			</div>	
			 <a
				type="button"
				href="{{"storage/".$livre->fichier}}"
				class="ml-24 pointer-events-auto mr-5 inline-block cursor-pointer rounded text-base font-normal leading-normal text-blue-500 transition duration-150 ease-in-out hover:text-blue-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 pb-4">
				Ouvrir le livre
				</a>
		</div>

	</div>
	@endforeach
	</div>
</x-app-layout>