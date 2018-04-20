<?php

namespace Controller;

use Core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('Main/index', null, 'layout');
    }

    public function aboutAction()
    {
        return $this->render('Main/about', null, 'layout');
    }
}
