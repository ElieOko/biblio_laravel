<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section Admin</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
    </style>
</head>
<body class="bg-gray-100 font-family-karla flex">

    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <a href="index.html" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
           Accueil
        </a>


        <a href="AttributionDir.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-user-alt mr-3"></i>
            Attribution Directeur
        </a>
        <a href="{{ route('prof.store') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-user-alt mr-3"></i>
           Ajouter un professeur
        </a>
        <a href="ListeEtudiant.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-user-alt mr-3"></i>
           Liste Etudiants
        </a>
        <a href="EtudiantDire.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-user-alt mr-3"></i>
          Etudiant ayant le Directeur
        </a>
    </aside>

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
                </button>

            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="index.html" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                   Accueil
                </a>


                <a href="AttributionDir.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fas fa-user-alt mr-3"></i>
                    Attribution Directeur
                </a>
                <a href="{{ route('prof.store')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fas fa-user-alt mr-3"></i>
                   Ajouter un professeur
                </a>
                <a href="ListeEtudiant.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fas fa-user-alt mr-3"></i>
                   Liste Etudiants
                </a>
                <a href="EtudiantDire.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fas fa-user-alt mr-3"></i>
                  Etudiant ayant le Directeur
                </a>
            </nav>
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
        </header>

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="w-full text-3xl text-black pb-6">Formulaire</h1>

                <div class="flex flex-wrap">


                    <div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
                        <p class="text-xl pb-6 flex items-center">
                            <i class="fas fa-list mr-3"></i> Ajouter un enseignant
                        </p>
                        <div class="leading-loose">
                            <form class="p-10 bg-white rounded shadow-xl" action="{{ route('prof.store') }}" method="post">
                                @csrf
                                <p class="text-lg text-gray-800 font-medium pb-4">Formulaire Enseignant</p>
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="nom">Nom</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nom" name="nom" type="text" required="" placeholder="Nom étudiant" aria-label="Name">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="postnom">Postnom</label>
                                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="postnom" name="postnom" type="text" required="" placeholder="postnom étudiant " aria-label="prenom">
                                </div>
                                <div class="mt-2">
                                    <label class=" block text-sm text-gray-600" for="prénom">Prénom</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="prénom" name="prenom" type="text" required="" placeholder="Prénom étudiant" aria-label="prenom">
                                </div>
                                <div class=" mt-2">
                                    <label class="block text-sm text-gray-600" for="Directeur">Matricule</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="" name="matricule" type="text" required="" placeholder="Matricule" aria-label="Directeur">
                                </div>
                                <div class=" mt-2">
                                    <label class="block text-sm text-gray-600" for="cus_name">Grade</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_n" name="grade" type="text" required="" placeholder="Grade " aria-label="Name">
                                </div>
                                <div class="mt-6">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Ajouter</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </main>

            <footer class="w-full bg-white text-right p-4">
                Développer par <a target="_blank" href="https://nsiku.net" class="underline">Angelique Bagalwa</a>.
            </footer>
        </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>
