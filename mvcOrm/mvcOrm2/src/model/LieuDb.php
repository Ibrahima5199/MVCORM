<?php

# Class RolesDb
# @author Oklem Pro <oklempro4@gmail.com>
# @package ${NAMESPACE}

namespace src\model;
use libs\system\Model;

class LieuDb extends Model
{
    public function add($lieu)
    {
        $this->entityManager->persist($lieu);
        $this->entityManager->flush();
    }

    public function get($id)
    {
        return $this->entityManager->getRepository("Lieu")->find(array("id"=>$id));
    }

    public function update($lieu)
    {
        $l = $this->get($lieu->getId());
        $l->setNom($lieu->getNom());
        $l->setLatitude($lieu->getLatitude());
        $l->setLongitude($lieu->getLongitude());
        $l->setUser($lieu->getUser());
        $this->entityManager->flush();
    }

    public function delete($id)
    {
        $l = $this->get($id);
        $this->entityManager->remove($l);
        $this->entityManager->flush();
    }
}