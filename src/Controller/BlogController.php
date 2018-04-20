<?php

namespace Controller;

use Core\Controller;

class BlogController extends Controller
{
    public function newsAction()
    {
       $model = $this->getModel('Article');
        
       $news = $model->findAll();
        
        return $this->render('Blog/news', compact('news'), 'layout');
    }

    public function articleAction($id)
    {
        $model = $this->getModel('Article');
        
        $article = $model->findOneBy(['id' => $id ]);

        return $this->render('Blog/article', compact('article'), 'layout');
    }
}
