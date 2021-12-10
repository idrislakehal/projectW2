<?php

namespace App\Controller;

use App\Entity\User;
use App\Fram\Factories\PDOFactory;
use App\Manager\PostManager;

class PostsController extends BaseController
{

    /**
     * Show all Posts
     */
    public function executeIndex()
    {
        $postManager = new PostManager(PDOFactory::getMysqlConnection());
        $posts = $postManager->getAllPosts();

        $this->render(
            'home.php',
            [
                'posts' => $posts,
                'user' => new User(),
                'test' => 'je suis un test'
            ],
            'Home page'
        );
    }

    public function createPosts()
    {
        if()
    }


}