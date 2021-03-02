<?php

# Class RolesController
# @author Oklem Pro <oklempro4@gmail.com>
# @package ${NAMESPACE}

//namespace src\controller;
use libs\system\Controller;
use src\model\RolesDb;
use src\model\UserDb;

class UserController extends Controller
{
    public function index()
    {
        $rolesDb = new RolesDb();
        $roles = new Roles();
        $roles = $rolesDb->findAll("Roles");
        return $this->view->load("user/index", $roles);
    }

    public function deconnect()
    {
        session_start();
        session_unset();
        $this->view->redirect("");
    }

    public function connection()
    {
        extract($_POST);
        session_start();
        $userDb = new UserDb();
        $user = $userDb->findByEmailAndPassword($email, $password);
        if ($user == null){
            $this->view->redirect("");
        }
        $_SESSION['id'] = $user->getId();
        $_SESSION['prenom'] = $user->getPrenom();
        $_SESSION['nom'] = $user->getNom();
        $_SESSION['email'] = $user->getEmail();
        $this->view->redirect("Lieu/liste");
    }

    public function inscription()
    {
        extract($_POST);
        session_start();
        $userDb = new UserDb();
        $user = new User();
        $user->setPrenom($prenom);
        $user->setNom($nom);
        $user->setEmail($email);
        $user->setPassword($password);
        foreach ($roles as $roleId){
            $user->addRole($userDb->findById("Roles", intval($roleId)));
        }
        $userDb->add($user);
        if ($user->getId() != null){
            $_SESSION['id'] = $user->getId();
            $_SESSION['prenom'] = $user->getPrenom();
            $_SESSION['nom'] = $user->getNom();
            $_SESSION['email'] = $user->getEmail();
            $this->view->redirect("Lieu/liste");
        }else{
            $this->view->redirect("");
        }
    }
}