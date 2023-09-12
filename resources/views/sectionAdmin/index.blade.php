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

    <link rel="icon" href="../images/isc-r.png" />
</head>
<body class="bg-gray-100 font-family-karla flex">



    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">SEction</a>

        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="index.html" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
               Accueil
            </a>
            <a href="AttributionDir.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-user-alt mr-3"></i>
                Attribution Directeur
            </a>
            <a href="{{ route('prof.create') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-user-alt mr-3"></i>
               Ajouter un professeur
            </a>
            <a href="{{ route('etudiants.create') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-user-alt mr-3"></i>
               Ajouter etudiants
            </a>
            <a href="{{ route('etudiants.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-user-alt mr-3"></i>
               Liste Etudiants
            </a>
            <a href="EtudiantDire.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-user-alt mr-3"></i>
              Etudiant ayant le Directeur
            </a>

        </nav>

    </aside>

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
                </button>
                <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>

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


                <a href="forms.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fas fa-user-alt mr-3"></i>
                    Attribution Directeur
                </a>
                <a href="{{ route('prof.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fas fa-user-alt mr-3"></i>
                   Ajouter un professeur
                </a>
                <a href="tables.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
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

        <div class="d-flex flex-row-reverse bd-highlight">
            <div class="p-2 bd-highlight">
                <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" data-toggle="modal" data-target="#modalAddForm" value="+Ajouter">
            </div>
        </div>

        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Dashboard</h1>

                <div class="grid grid-cols-12 gap-6 mt-5">
                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                        href="#">
                        <div class="p-5">
                            <div class="flex justify-between">
                                <img src="../images/teacher.png" class="h-7 w-7 text-blue-400"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">


                            </div>
                            <div class="ml-2 w-full flex-1">
                                <div>
                                    <div class="mt-3 text-3xl font-bold leading-8">10</div>

                                    <div class="mt-1 text-base text-gray-600">Professeur</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                        href="#">
                        <div class="p-5">
                            <div class="flex justify-between">
                                <img src="../images/instructor.png" class="h-7 w-7 text-yellow-400"
                                 viewBox="0 0 24 24">


                            </div>
                            <div class="ml-2 w-full flex-1">
                                <div>
                                    <div class="mt-3 text-3xl font-bold leading-8">4.510</div>

                                    <div class="mt-1 text-base text-gray-600">Etudiants</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                        href="#">
                        <div class="p-5">
                            <div class="flex justify-between">
                                <img src="../images/instructor.png" class="h-7 w-7 text-pink-600"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            </div>
                            <div class="ml-2 w-full flex-1">
                                <div>
                                    <div class="mt-3 text-3xl font-bold leading-8">4.510</div>

                                    <div class="mt-1 text-base text-gray-600">Etudiants ayant Directeur</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                        href="#">
                        <div class="p-5">
                            <div class="flex justify-between">
                                <img src="../images/instructor.png" class="h-7 w-7 text-green-400"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">


                            </div>
                            <div class="ml-2 w-full flex-1">
                                <div>
                                    <div class="mt-3 text-3xl font-bold leading-8">4.510</div>

                                    <div class="mt-1 text-base text-gray-600">Etudiants n'ayant pas de Directeur</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Liste de professeur
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Matricule</th>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Grade</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nom</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Postnom</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Prenom</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                @forelse ($profs as $item)
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4">{{ $item->matricule }}</td>
                                    <td class="w-1/3 text-left py-3 px-4">{{ $item->grade }}</td>
                                    <td class="text-left py-3 px-4">{{ $item->nom }}</td>
                                    <td class="text-left py-3 px-4">{{ $item->postnom }}</td>
                                    <td class="text-left py-3 px-4">{{ $item->prenom }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        Aucun enregistrement
                                    </td>
                              </tr>
                            @endforelse
                            </tbody>
                        </table>
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
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <script>
        var chartOne = document.getElementById('chartOne');
        var myChart = new Chart(chartOne, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var chartTwo = document.getElementById('chartTwo');
        var myLineChart = new Chart(chartTwo, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>
