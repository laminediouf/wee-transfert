<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
      
    <form action="" method="get">

    <div class="form-row">
        <div class="form-group">
            <label for="Nom">Votre nom</label>
            <input type="text" class="form-control" name="Nom" id="Nom" aria-describedby="helpId" placeholder="nom">
            <small id="helpId" class="form-text text-muted">Vieillez saisir votre nom </small>
        </div>

        <div class="form-group">
          <label for="Prenom">Votre Prenom</label>
          <input type="text" class="form-control" name="Prenom" id="Prenom" aria-describedby="helpId" placeholder="Prenom">
          <small id="helpId" class="form-text text-muted">Veillez saisir votre prenom</small>
        </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Email">
        <small id="emailHelpId" class="form-text text-muted">Email</small>
      </div>

      <div class="form-group">
        <label for="password">Votre password </label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
      </div>
    </div>

    <div class="form-row">
        <div class="form-group">
          <label for="confirmation_password">Confirmation de password </label>
          <input type="password" class="form-control" name="confirmation_password" id="confirmation_password" placeholder="Confirmer votre mot de passe ">
        </div>

        <div class="form-group">
          <label for="Societe">Societe</label>
          <input type="text" class="form-control" name="societe" id="Societe" aria-describedby="helpId" placeholder="Facultatif">
        </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="Adresse">Adresse</label>
        <input type="text" class="form-control" name="adresse" id="Adresse" aria-describedby="helpId" placeholder="Adresse">
        <small id="helpId" class="form-text text-muted">Adresse</small>
      </div>
    
      <div class="form-group">
        <label for="Ville">Ville</label>
        <input type="text" class="form-control" name="ville" id="ville" aria-describedby="helpId" placeholder="Ville">
        <small id="helpId" class="form-text text-muted">Ville</small>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="Code_postal"></label>
        <input type="text" class="form-control" name="code_postal" id="Code_postal" aria-describedby="helpId" placeholder="Code Postal">
        <small id="helpId" class="form-text text-muted">Code postal</small>
      </div>

      <div class="form-group">
      <div class="form-group">
        <label for="Pays"></label>
        <input type="text" class="form-control" name="pays" id="Pays" aria-describedby="helpId" placeholder="Pays">
        <small id="helpId" class="form-text text-muted">Pays</small>
      </div>
      </div>
    </div>
      <button class="btn btn-success" type="submit"> Inscription </button>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>