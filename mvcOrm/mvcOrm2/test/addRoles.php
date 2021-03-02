<?php

require_once '../bootstrap.php';

$role = new Roles();

$role->setNom("ROLE_USER");

$entityManager->persist($role);
$entityManager->flush();

echo "L'id du nouveau role est: " . $role->getId() . "\n";

?>