<?php require_once "src/view/header.php" ?>

<!-- DEBUT CONTENT -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="card">
                    <h5 class="card-header text-center text-white bg-dark">LISTE DES PAYS</h5>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Latitude</th>
                                <th scope="col">Longitude</th>
                                <th scope="col">Nom Complet User</th>
                                <th scope="col" colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($data["listeLieux"] as $lieu){
                            ?>
                            <tr>
                                <th scope="row"><?= $lieu->getId() ?></th>
                                <td><?= $lieu->getNom() ?></td>
                                <td><?= $lieu->getLatitude() ?></td>
                                <td><?= $lieu->getLongitude() ?></td>
                                <td><?= $lieu->getUser()->getPrenom() . " " . $lieu->getUser()->getNom() ?></td>
                                <td><a class="btn btn-sm btn-warning" href="/mvcOrm2/Lieu/edit/<?= $lieu->getId() ?>"  onclick="return confirm('Voulez-vous modifier ?');">Editer</a></td>
                                <td><a class="btn btn-sm btn-danger" href="/mvcOrm2/Lieu/delete/<?= $lieu->getId() ?>"  onclick="return confirm('Voulez-vous supprimer ?');">Supprimer</a></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="card">
                    <h5 class="card-header text-center text-white bg-dark">FORMULAIRE DE MODIFICATION DES PAYS</h5>
                    <div class="card-body">
                        <form method="post" action="/mvcOrm2/Lieu/update">
                            <div class="form-group">
                                <label>ID</label>
                                <input class="form-control" readonly type="text" value="<?= $data["lieu"]->getId() ?>" name="id">
                            </div>
                            <div class="form-group">
                                <label>Nom</label>
                                <input class="form-control" type="text" value="<?= $data["lieu"]->getNom() ?>" name="nom" required>
                            </div>
                            <div class="form-group">
                                <label>Latitude</label>
                                <input class="form-control" type="text" value="<?= $data["lieu"]->getLatitude() ?>" name="latitude" required>
                            </div>
                            <div class="form-group">
                                <label>Longitude</label>
                                <input class="form-control" type="text" value="<?= $data["lieu"]->getLongitude() ?>" name="longitude" required>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="valider" value="Modifier">
                                <input class="btn btn-danger" type="reset" name="annuler" value="Annuler">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- FIN CONTENT-->

<?php require_once "src/view/footer.php" ?>