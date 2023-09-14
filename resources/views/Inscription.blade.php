<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <!-- resources/views/inscription.blade.php -->
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
