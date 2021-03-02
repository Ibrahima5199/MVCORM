<?php

# Class RolesController
# @author Oklem Pro <oklempro4@gmail.com>
# @package ${NAMESPACE}

//namespace src\controller;
use libs\system\Controller;
use src\model\FormationDb;
use src\model\LieuDb;

class FormationController extends Controller
{
    public function liste()
    {
        $formationDb = new FormationDb();
        $data["listeFormation"] = $formationDb->findAll("Formation");
        $data["listeLieux"] = $formationDb->findAll("Lieu");
        return $this->view->load("formation/liste", $data);
    }

    public function insert(){
        extract($_POST);
        $formationDb = new FormationDb();
        $formation = new Formation();
        $formation->setNom($nom);
        $formation->setDuree($duree);
        $formation->setDate($date);
        $formation->setLieu($formationDb->findById("Lieu", $idlieu));
        $formationDb->add($formation);
        $this->view->redirect("Formation/liste");
    }

    public function edit($id)
    {
        $formationDb = new FormationDb();
        $data["formation"] = $formationDb->get($id);
        $data["listeFormation"] = $formationDb->findAll("Formation");
        $data["listeLieux"] = $formationDb->findAll("Lieu");
        return $this->view->load("formation/edit", $data);
    }

    public function delete($id)
    {
        $formationDb = new FormationDb();
        $formationDb->delete($id);
        return $this->liste();
    }

    public function update(){
        extract($_POST);
        $formationDb = new FormationDb();
        $formation = new Formation();
        $formation->setNom($nom);
        $formation->setDuree($duree);
        $formation->setDate($date);
        $formation->setLieu($formationDb->findById("Lieu", $idlieu));

        $formationDb->update($formation);

        return $this->liste();
    }
}