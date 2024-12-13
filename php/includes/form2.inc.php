<h2 class="text-center">Ajouter plus de données</h2>

<form class="row" action="?submit" method="POST" enctype="multipart/form-data">
    <div class="card col-md-7 mx-auto my-1">
        <input type="text" class="form-control mt-3 mb-3 p-3" placeholder="Prénom" name="first_name" required>
        <input type="text" class="form-control mb-3 p-3" placeholder="Nom" name="name" required>

        <label for="age">Age (18 à 70 ans)</label>
        <input type="number" name="age" class="form-control mb-3 p-3" placeholder="Renseignez votre âge" min="18" max="70" required>

        <div class="input-group ">
            <span class="input-group-text" id="basic-addon3">Taille (1,26 m à 3 m)</span>
            <input type="number" class="form-control" placeholder="1,7" step=".01" name="size" min="1.26" max="3" required>
            <span class="input-group-text" id="basic-addon3">m</span>
        </div>

        <fieldset class="mt-4">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="civility" value="Femme" required>
                <label class="form-check-label">Femme</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="civility" value="Homme" required>
                <label class="form-check-label">Homme</label>
            </div>
        </fieldset> 
    </div>
    <div class="card col-md-4 mx-auto my-1">
    <label class="form-check-label">Connaissances</label>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="skills[html]" value="HTML5" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">HTML</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="skills[css]" value="CSS3" id="defaultCheck2">
            <label class="form-check-label" for="defaultCheck2">CSS</label>
        </div>
        <div class="form-check">  
            <input class="form-check-input" type="checkbox" name="skills[javascript]" value="JavaScript" id="defaultCheck3">
            <label class="form-check-label" for="defaultCheck3">JavaScript</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="skills[php]" value="PHP" id="defaultCheck4">
            <label class="form-check-label" for="defaultCheck4">PHP</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="skills[mysql]" value="MySQL" id="defaultCheck5">
            <label class="form-check-label" for="defaultCheck5">MySQL</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="skills[bootstrap]" value="Bootstrap" id="defaultCheck6">
            <label class="form-check-label" for="defaultCheck6">Bootstrap</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="skills[symfony]" value="Symfony" id="defaultCheck7">
            <label class="form-check-label" for="defaultCheck7">Symfony</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="skills[react]" value="REACT" id="defaultCheck8">
            <label class="form-check-label" for="defaultCheck8">React</label>
        </div> 
        <div>
            <label for="exampleColorInput" class="form-label">Couleur préférée</label>
            <input type="color" class="form-control form-control-color" id="exampleColorInput" name="skills[color]" title="Choose your color" required>   
        </div> 
        <div class="mb-3">
            <label for="date">Date de naissance</label>
            <input type="date" id="date" name="skills[dob]" value="date" required>
        </div>
    </div>
    <div class="card col-11 mx-auto my-1">
    <label>Joindre une image (jpg ou png)</label>
    <input type="file" class="form-control" id="inputGroupFile02" name="img" required>
    </div>

<div class="d-md-flex justify-content-md-end mb-3 mt-3">
    <button class="btn btn-primary" type="submit">Enregistrer les données</button>
</div>
</form>