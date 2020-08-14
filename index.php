<?php 


require_once('xrouter.php');


$xrouter = new xrouter();


$xrouter->get('/' , function(){

echo 'hello world';

});

$xrouter->get('/contact', function(){

    echo 'contact form ';

});

$xrouter->run();