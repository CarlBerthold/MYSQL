<?php

require_once __DIR__ . '/inc/Person.php';

$test2 = new Person();

//hier passieren viele Dinge ...
$test2 = 'Das ist ein Test';
//hier passieren noch mehr Dinge ...

if (!($test2 instanceof Person)) {
    //wenn $test2 keine Person ist, machen wir eine draus
    $test2 = new Person();
}

echo $test2->beschreibe();
