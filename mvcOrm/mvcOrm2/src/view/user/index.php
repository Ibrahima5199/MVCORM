<?php
    session_start();
    if (!empty($_SESSION)){
        header("Location: /mvcOrm2/Lieu/liste");
    }
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MVC ORM - DOCTRINE</title>
    <link rel="stylesheet" href="/mvcOrm2/public/css/bootstrap.css">
    <link rel="stylesheet" href="/mvcOrm2/public/css/mdb.css">
</head>
<body>

    <!-- DEBUT CONTENT -->
    <h1 class="text-center text-dark mt-3">MVC ORM - DOCTRINE</h1>
    <div class="row mt-5">
        <div class="col-4 offset-1">
            <h1 class="text-dark text-center">CONNECTION</h1>
            <form method="post" action="User/connection">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label text-dark" for="form1Example1">Adresse Email</label>
                    <input type="email" id="form1Example1" name="email" required class="form-control" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label text-dark" for="form1Example2">Mot de Passe</label>
                    <input type="password" id="form1Example2" name="password" required class="form-control" />
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-dark btn-block" name="btnConnection">Se Connecter</button>
            </form>
        </div>
        <div class="col-4 offset-2">
            <h1 class="text-dark text-center">INSCRIPTION</h1>
            <form method="post" action="User/inscription">
                <!-- Prenom input -->
                <div class="form-outline mb-3">
                    <label class="form-label text-dark" for="form1Example1">Prenom</label>
                    <input type="text" id="form1Example1" name="prenom" required class="form-control" />
                </div>
                <!-- Nom input -->
                <div class="form-outline mb-3">
                    <label class="form-label text-dark" for="form1Example1">Nom</label>
                    <input type="text" id="form1Example1" name="nom" required class="form-control" />
                </div>
                <!-- Etat input -->
                <div class="form-outline mb-3">
                    <label class="form-label text-dark" for="form1Example1">Roles</label>
                    <select required name="roles[]" class="form-control" id="" multiple="multiple">
                        <?php
                        foreach ($data as $role){
                            echo "<option value=\"".$role->getId()."\">".$role->getNom()."</option>";
                        }
                        ?>
                    </select>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-3">
                    <label class="form-label text-dark" for="form1Example1">Adresse Email</label>
                    <input type="email" id="form1Example1" name="email" required class="form-control" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                    <label class="form-label text-dark" for="form1Example2">Mot de Passe</label>
                    <input type="password" id="form1Example2" name="password" required class="form-control" />
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-dark btn-block" name="btnInscription">S'Inscrire</button>
            </form>
        </div>
    </div>
    <!-- FIN CONTENT-->


    <script type="text/javascript" src="/mvcOrm2/public/js/jquery.js"></script>
    <script type="text/javascript" src="/mvcOrm2/public/js/bootstrap.js"></script>
    <script type="text/javascript" src="/mvcOrm2/public/js/mdb.js"></script>
</body>
</html>