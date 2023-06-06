<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
      crossorigin="anonymous"/>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">SuiviPatientPro</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addPatient.php">Ajouter un patient</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listPatient.php">Liste des patients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addRendezvous.php">Prendre un rendez-vous</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listRendezvous.php">Liste des rendez-vous</a>
        </li>
      </ul>
    </div>
  </nav>

<div class="container spacer">
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
        <h1 class="text-center">Enregistrer un rendez-vous</h1>
    </div>
 
    <div class="row">
        <div class="col-md-4 ml-auto mr-auto">
            <form action="save.php" method="post">
                <div class="form-group">
                    <label for="date"> Date </label>
                    <input type="date" name="date" id="date" class="form-control" value="2023-03-24" min="2023-01-01" max="2023-12-31" 
                           aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="time"> Heure </label>
                    <input class="form-control" type="time" name="time" id="time">
                </div>
                <div class="form-group">
                    <label for="namePatient"> Nom du patient </label>
                    <input type="text" class="form-control" name="namePatient" id="namePatient" placeholder="Nom du patient">
                </div>
                <input class="btn btn-primary" type="submit" name="save" value="Enregistrer"/>
            </form>
        </div>
    </div>
</div>