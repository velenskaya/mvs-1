<?php

    //Main
    $router->add('homepage', '/', 'Main:indexAction');
    $router->add('about', '/about', 'Main:aboutAction');

    // Blog
    $router->add('news', '/news', 'Blog:newsAction');
    $router->add('article', '/article/(id:num)', 'Blog:articleAction');

    // Contacts
    $router->add('news', '/news', 'Blog:newsAction');
    $router->add('article', '/article/(id:num)', 'Blog:articleAction');
    // $router->add('about', '/about', 'AppController:aboutAction');
    // $router->add('contacts', '/contacts', 'AppController:contactsAction');
    // $router->add('user', '/user/(id:num)', 'AppController:userAction');

