<?php require_once "src/view/header.php" ?>

<!-- DEBUT CONTENT -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="card">
                    <h5 class="card-header text-center text-white bg-dark">LISTE DES FORMATIONS</h5>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Durre</th>
                                <th scope="col">Date</th>
                                <th scope="col">Nom Lieu</th>
                                <th scope="col" colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($data["listeFormation"] as $formation){
                            ?>
                            <tr>
                                <th scope="row"><?= $formation->getId() ?></th>
                                <td><?= $formation->getNom() ?></td>
                                <td><?= $formation->getDuree() ?></td>
                                <td><?= $formation->getDate() ?></td>
                                <td><?= $formation->getLieu()->getNom() ?></td>
                                <td><a class="btn btn-sm btn-warning" href="/mvcOrm2/Formation/edit/<?= $formation->getId() ?>"  onclick="return confirm('Voulez-vous modifier ?');">Editer</a></td>
                                <td><a class="btn btn-sm btn-danger" href="/mvcOrm2/Formation/delete/<?= $formation->getId() ?>"  onclick="return confirm('Voulez-vous supprimer ?');">Supprimer</a></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="card">
                    <h5 class="card-header text-center text-white bg-dark">FORMULAIRE D'AJOUT DES FORMATIONS</h5>
                    <div class="card-body">
                        <form method="post" action="/mvcOrm2/Formation/insert">
                            <div class="form-group">
                                <label>Nom</label>
                                <input class="form-control" type="text" name="nom" required>
                            </div>
                            <div class="form-group">
                                <label>Duree</label>
                                <input class="form-control" type="number" name="duree" required>
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" type="date" name="date" required>
                            </div>
                            <div class="form-group">
                                <label>Lieu</label>
                                <select class="form-control" name="idlieu">
                                    <option value="" disabled>Faites votre choix?</option>
                                    <?php foreach ($data["listeLieux"] as $lieux) { ?>
                                    <option value="<?= $lieux->getId() ?>"><?= $lieux->getNom() ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="valider" value="Envoyer">
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