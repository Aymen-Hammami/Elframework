<?php
namespace App\Controller;

use Elframework\Controller\AbstractController;

class MainController extends AbstractController {

  public function home() {
    return $this->renderView('pages/main/home.php', ['title' => 'Accueil','description'=>'une description']);
  }

}