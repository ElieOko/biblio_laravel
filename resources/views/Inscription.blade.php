<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-blue-700">
    <!-- resources/views/inscription.blade.php -->
    <form action="{{ route('inscription.store') }}" method="POST">
        @csrf

        <div class="space-y-10 mx-6">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-xl uppercase text-white">Inscription</h2>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-4">
                <label for="username" class="block text-xl font-medium leading-6 text-white ">Nom de l'utilisateur</label>
                <div class="mt-2">
                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input type="text" name="username" id="username" autocomplete="username" class="block flex-1 rounded-md border-0 bg-white py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" >
                  </div>
                </div>
              </div>
              <div class="sm:col-span-3">
                <label for="pass" class="block text-xl font-medium leading-6 text-white">mot de passe</label>
                <div class="mt-2">
                  <input type="text" name="pass" id="pass" autocomplete="pass" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
      
              <div class="sm:col-span-3">
                <label for="conf_pass" class="block text-xl font-medium leading-6 text-white">confirmation mot de passe</label>
                <div class="mt-2">
                  <input type="text" name="conf_pass" id="conf_pass" autocomplete="pass" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
            </div>
            
          </div>
          
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-xl uppercase text-white"> Information Personnelle</h2>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                
              <div class="sm:col-span-2 sm:col-start-1">
                <label for="nom" class="block text-lg font-medium leading-6 text-white">Nom</label>
                <div class="mt-2">
                  <input type="text" name="nom" id="nom" autocomplete="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
      
              <div class="sm:col-span-2">
                <label for="postnom" class="block text-lg font-medium leading-6 text-white">PostNom</label>
                <div class="mt-2">
                  <input type="text" name="postnom" id="postnom" autocomplete="last_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
      
              <div class="sm:col-span-2">
                <label for="prenom" class="block text-lg font-medium leading-6 text-white">Prénom</label>
                <div class="mt-2">
                  <input type="text" name="prenom" id="prenom" autocomplete="first_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
              
      
              <div class="sm:col-span-4">
                <label for="email" class="block text-lg font-medium leading-6 text-white">Addresse email</label>
                <div class="mt-2">
                  <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
              <div class="relative sm:col-span-full  z-0 w-full mb-6 group">
                <label for="profession" class="block text-lg font-medium leading-6 text-white">Profession</label>
                <select name="profession" id="profession" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-white rounded-md  appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    <option selected>Choisissez votre Profession</option>
                    <option value="etudiant">Étudiant</option>
                    <option value="section">Agent Section</option>
                    <option value="bibliotheque">Bibliothécaire</option>
                </select>
            </div>
      
              
            <div id="etudiant-fields" class="col-span-full" style="display: none;">
                <label for="promotion" class="block text-lg font-medium leading-6 text-white">Promotion</label>
                <input type="text" name="promotion" id="promotion"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label for="section" class="block text-lg font-medium leading-6 text-white">Section</label>
                <input type="text" name="section" id="section section-fields" autocomplete="section" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <div id="section-bibliotheque-fields" class="col-span-full" style="display: none;">
                <label for="matricule" class="block text-lg font-medium leading-6 text-white">Matricule</label>
                <input type="text" name="matricule" id="matricule" autocomplete="matricule" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
             

              
              
            </div>
          </div>
      
        </div>
      
        <div class="mt-6 flex items-center  justify-center gap-x-6">
          <button type="submit" class="rounded-md bg-green-700 px-5 py-4 text-lg font-semibold text-white shadow-sm hover:bg-green-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">S'inscrire</button>
        </div>
      </form>
 <!--   
<form action="{{ route('inscription.store') }}" method="POST">
    @csrf

    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="nom" id="nom" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="nom" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Votre Nom</label>
    </div>
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="postnom" id="postnom" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="postnom" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Votre PostNom</label>
    </div>
    <div class="relative z-0 w-full mb-6 group">
        <input type="prenom" name="prenom" id="prenom" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="prenom" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Votre Prenom</label>
    </div>
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="utilisateur" id="utilisateur" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="utilisateur" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Votre Nom d'utilisateur</label>
    </div>
    <div class="grid md:grid-cols-2 md:gap-6" id="motdepass" >
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="motdepasse" id="motdepasse" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="motdepasse" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Votre mot de passe</label>
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="conf_motdepasse" id="motdepasse" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="conf_motdepasse" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirmez votre mot de passe</label>
        </div>
      </div>

    <div class="relative z-0 w-full mb-6 group">
        <label for="profession" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Profession</label>
        <select name="profession" id="profession" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
            <option selected>Choisissez votre Profession</option>
            <option value="etudiant">Étudiant</option>
            <option value="section">Agent Section</option>
            <option value="bibliotheque">Bibliothécaire</option>
        </select>
    </div>

    <div id="etudiant-fields" style="display: none;">
        <label for="promotion">Promotion</label>
        <input type="text" name="promotion" id="promotion">

        <label for="section">Section</label>
        <input type="text" name="section" id="section">
    </div>

    <div id="section-bibliotheque-fields" style="display: none;">
        <label for="matricule">Matricule</label>
        <input type="text" name="matricule" id="matricule">
    </div>

    <button type="submit">Inscription</button>
</form>
-->
<script>
    const professionSelect = document.getElementById('profession');
    const etudiantFields = document.getElementById('etudiant-fields');
    const sectionBibliothequeFields = document.getElementById('section-bibliotheque-fields');
    const sectionFields = document.getElementById('section-fields');

    professionSelect.addEventListener('change', function() {
        if (this.value === 'etudiant') {
            etudiantFields.style.display = 'block';
            sectionFields.style.display = 'none';
            sectionBibliothequeFields.style.display = 'none';
        } else if (this.value === 'bibliotheque') {
            etudiantFields.style.display = 'none';
            sectionFields.style.display = 'none';
            sectionBibliothequeFields.style.display = 'block';}
            else if (this.value === 'section') {
            etudiantFields.style.display = 'none';
            sectionBibliothequeFields.style.display = 'block';
            sectionFields.style.display = 'block';
        } else {
            etudiantFields.style.display = 'none';
            sectionBibliothequeFields.style.display = 'none';
            sectionFields.style.display = 'none';
        }
    });
</script>
</body>
</html>
