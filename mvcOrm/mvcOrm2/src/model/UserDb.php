<?php

# Class RolesDb
# @author Oklem Pro <oklempro4@gmail.com>
# @package ${NAMESPACE}

namespace src\model;
use libs\system\Model;

class UserDb extends Model
{

    public function add($user)
    {
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }

    public function findByEmailAndPassword($email, $password){
        return $this->entityManager
            ->getRepository("User")
            ->findOneBy(['email'=>$email, 'password'=>$password]);
    }
}