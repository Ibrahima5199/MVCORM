<?php

# Class RolesDb
# @author Oklem Pro <oklempro4@gmail.com>
# @package ${NAMESPACE}

namespace src\model;
use libs\system\Model;

class FormationDb extends Model
{
    public function add($formation)
    {
        $this->entityManager->persist($formation);
        $this->entityManager->flush();
    }

    public function get($id)
    {
        return $this->entityManager->getRepository("Formation")->find(array("id"=>$id));
    }

    public function update($formation)
    {
        $f = $this->get($formation->getId());
        $f->setNom($formation->getNom());
        $f->setDuree($formation->getDuree());
        $f->setDate($formation->getDate());
        $f->setLieu($formation->getLieu());
        $this->entityManager->flush();
    }

    public function delete($id)
    {
        $f = $this->get($id);
        $this->entityManager->remove($f);
        $this->entityManager->flush();
    }
}