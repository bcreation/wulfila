<?php 
class Conf{

    static $debug = 1;
    static $databases = array(
        'default' => array(
            'host' => 'localhost:8889',
            'database' => 'Wulfila',
            'login' => 'root',
            'password' => 'root',
        ),
    );
}
Router::prefix('cockpit', 'admin');
Router::connect('/', 'posts/index');
Router::connect('post/:slug-:id', 'posts/view/id:([0-9]+)/slug:([a-z0-9\-])+');
Router::connect('page/:slug-:id', 'pages/view/id:([0-9]+)/slug:([a-z0-9\-])+');
