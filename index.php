<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$lexer = new \Twig\Lexer($twig, array(
     'tag_block'     => array('{', '}'),
     'tag_variable'  => array('{{', '}}')
));

    $twig->setLexer($lexer);


echo $twig->render('index.html',array(
    'name' => 'გიორგი',
    'age'  => 20,
    'user' => 'Tandila69'
));
