<?php



require_once 'Controllers/Chome.php';

$controller = new Chome();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $controller->renderpage();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'] ?? 0;
  

  
}