<?php 
    require_once "User.php";
    require_once "Person.php";
    //this will create a new object
    $admin = new User();
    $admin->username = "admin";
    $admin->password = "password";

    $guest = new User();
    $guest->username = "Roger";
    $guest->password = "Ilovethegoldengirls";

    if($guest->isAdmin()) {
        echo "Your guest can edit stuff" . PHP_EOL;
    } else {
        echo "The guest can't edit stuff" . PHP_EOL;
    }

    if($admin->isAdmin()) {
        echo "The admin can edit stuff" . PHP_EOL;
    }

    $bob = new Person();
    $bob->firstName = "Bob";
    $bob->lastName = "Bobberson";
    $bob-addFruit("pineapple");
    $bob-addFruit("banana");

    foreach($bob->fruit as $fruit) {
        echo $fruit . PHP_EOL;
    }
?>