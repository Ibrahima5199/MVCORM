<?php

# Class RolesController
# @author Oklem Pro <oklempro4@gmail.com>
# @package ${NAMESPACE}

//namespace src\controller;
use libs\system\Controller;
use src\model\LieuDb;

class LieuController extends Controller
{
    public function liste()
    {
        $lieuDb = new LieuDb();
        $lieux = $lieuDb->findAll("Lieu");
//        var_dump($lieux);
        return $this->view->load("lieu/liste", $lieux);
    }

    public function insert(){
        extract($_POST);
        session_start();
        $lieuDb = new LieuDb();
        $lieu = new Lieu();
        $lieu->setNom($nom);
        $lieu->setLatitude($latitude);
        $lieu->setLongitude($longitude);
        $lieu->setUser($lieuDb->findById("User", intval($_SESSION['id'])));
        $lieuDb->add($lieu);
        $this->view->redirect("Lieu/liste");
    }

    public function edit($id)
    {
        $lieuDb = new LieuDb();
        $data["lieu"] = $lieuDb->get($id);
        $data["listeLieux"] = $lieuDb->findAll("Lieu");
        return $this->view->load("lieu/edit", $data);
    }

    public function delete($id)
    {
        $lieuDb = new LieuDb();
        $lieuDb->delete($id);
        return $this->liste();
    }

    public function update(){
        extract($_POST);
        session_start();
        $lieuDb = new LieuDb();
        $lieu = new Lieu();
        $lieu->setNom($nom);
        $lieu->setLatitude($latitude);
        $lieu->setLongitude($longitude);
        $lieu->setUser($lieuDb->findById("User", intval($_SESSION['id'])));

        $lieuDb->update($lieu);

        return $this->liste();
    }
}