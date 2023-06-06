<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
      crossorigin="anonymous"/>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">SuiviPatientPro</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
</br>
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
        <h1 class="text-center">Liste des rendez-vous</h1>
    </div>
    <a href ="addRendezvous.php">Enregistrer un rendez-vous</a>
    <br>
    <br>
    <div class="row" ml-auto mr-auto>
        <div class="col-md-8" ml-auto mr-auto>
            <table class="table table-striped">
                <tr>
                    <th>Date</th>
                    <th>Heure</th>
                    <th>Id du patient</th>
                    <th>Nom du patient</th>
                </tr>
                <?php while ($rendezvous = $ps->fetch()) { ?>
                    <tr>
                        <td><?= $rendezvous['date'] ?></td>
                        <td><?= $rendezvous['time'] ?></td>
                        <td><?= $rendezvous['patient_id'] ?></td>
                        <td><?= $rendezvous['patient'] ?></td>
                        <td><a class="glyphicon glyphicon-edit" href="edit.php?id=<?= $rendezvous['id'] ?>"><i
                                        class="fas fa-edit"></i></i></a></td>
                        <td><a style="color: red"
                               onclick="return confirm('Voulez-vous vraiment supprimer ce rendez-vous')"
                               href="delete.php?id=<?= $rendezvous['id'] ?>"><i class="fas fa-trash"></i></i></a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>