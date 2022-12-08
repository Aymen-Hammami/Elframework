<?php
namespace App\Controller;

use Elframework\Controller\AbstractController;
use App\Manager\ArticleManager;
class ArticleController extends AbstractController {

  public function show() {
     $articleManager = new ArticleManager();
    return $this->renderView('pages/main/article.php', ['title' => 'Article','description'=>'une description','articles'=>$articleManager->findAll()]);
  }
}
