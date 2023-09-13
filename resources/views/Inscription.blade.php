<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/inscription.blade.php -->
<form action="{{ route('inscription.store') }}" method="POST">
    @csrf

    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
    </div>

    <div>
        <label for="postnom">Postnom</label>
        <input type="text" name="postnom" id="postnom">
    </div>

    <div>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom">
    </div>

    <div>
        <label for="profession">Profession</label>
        <select name="profession" id="profession">
            <option value="etudiant">Étudiant</option>
            <option value="section">Section</option>
            <option value="bibliotheque">Bibliothèque</option>
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

    professionSelect.addEventListener('change', function() {
        if (this.value === 'etudiant') {
            etudiantFields.style.display = 'block';
            sectionBibliothequeFields.style.display = 'none';
        } else if (this.value === 'section' || this.value === 'bibliotheque') {
            etudiantFields.style.display = 'none';
            sectionBibliothequeFields.style.display = 'block';
        } else {
            etudiantFields.style.display = 'none';
            sectionBibliothequeFields.style.display = 'none';
        }
    });
</script>
</body>
</html>
