<?php

# Class RolesController
# @author Oklem Pro <oklempro4@gmail.com>
# @package ${NAMESPACE}

//namespace src\controller;
use libs\system\Controller;
use src\model\RolesDb;

class RolesController extends Controller
{
    public function getAll()
    {
        $rolesDb = new RolesDb();
        $roles = new Roles();
        $roles = $rolesDb->findAll("Roles");
        return $this->view->load("roles/getAll", $roles);
    }
}