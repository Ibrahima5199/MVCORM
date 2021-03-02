<?php
session_start();
if (empty($_SESSION)){
    header("Location: /mvcOrm2/");
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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">MVC/ORM-DOCTRINE</a>
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/mvcOrm2/Lieu/liste">Lieux</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/mvcOrm2/Formation/liste">Formations</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/mvcOrm2/User/deconnect">Se Deconnecter</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
