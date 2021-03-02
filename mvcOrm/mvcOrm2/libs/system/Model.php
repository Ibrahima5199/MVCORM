<?php

# Class Model
# @author Oklem Pro <oklempro4@gmail.com>
# @package ${NAMESPACE}

namespace libs\system;

class Model
{
    protected $entityManager;

    public function __construct()
    {
        require_once "bootstrap.php";
        $this->entityManager = $entityManager;
    }

    public function findAll($entity)
    {
        return $this->entityManager->getRepository($entity)->findAll();
    }

    public function findById($entity, $id){
        return $this->entityManager
            ->getRepository($entity)
            ->findOneBy(['id'=>$id]);
    }
}