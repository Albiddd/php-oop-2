<?php

include __DIR__ . "/classes/User.php";
include __DIR__ . "/classes/Food.php";
include __DIR__ . "/classes/Toy.php";
include __DIR__ . "/classes/Accessory.php";



$users = [
    new User("John", "Doe", "jdoe@gmail", 2017),
    new User("Rick", "Sanchez", "rick.sanchez@gmail",2015),
    new User("Alan", "Turing", "alan@gmail",2020 ),
    new User("Christopher", "Nolan", "nolan25@gmail", 2010),
    new User("Alberto", "Dore", "albertod@gmail", 2022)
    
];

$products = [
   
    new Food("Cibo per gatti al vitello", 100, 35.50, "Cibo per animali", "Monge", "Crocchette di vitello", 20),
    new Food("Cibo per cani al pollo", 151, 15.99, "Cibo per animali","Trainer", "Crocchette di pollo", 15),
    new Food("Cibo per cani al manzo", 176, 24.99, "Cibo per animali","Royal Canin", "Crocchette di manzo", 25),
    
    new Toy("Pallina di gomma per cani", 459, 5.90, "Giochi per animali", "Pedigree", "Pallina","gomma"),
    new Toy("Topolino per gatti", 410, 8.50, "Giochi per animali", "Cat world", "Topolino", "gomma"),
    new Toy("Gioco masticabile per cani", 482, 10.20, "Giochi per animali", "Pedrigree", "Nodo da masticare", "corda"),

    new Accessory("Collare per cani", 897, 12.50, "Accessori per animali", "Perro's life", "Collare per cani", "pelle", "nero"),
    new Accessory("Cuccia per cani", 156, 75.99, "Accessori per animali", "Pedigree", "Cuccia per cani", "plastica", "verde"),
    new Accessory("Ciotola per cibo", 222, 5.00, "Accessori per animali", "Puppies cave", "Ciotola", "acciaio", "grigio"),

];

$chart = [
    new Food("Cibo per cani al pollo", 151, 15.99, "Cibo per animali","Trainer", "Crocchette di pollo", 15),
    new Toy("Gioco masticabile per cani", 482, 10.20, "Giochi per animali", "Pedrigree", "Nodo da masticare", "corda"),
    new Accessory("Collare per cani", 897, 12.50, "Accessori per animali", "Perro's life", "Collare per cani", "pelle", "nero"),
];

// function getChart() 
// {
//     echo array_sum($chart)
//     // foreach($chart as $value)
//     // {
//     //     echo $value->prodPrice
//     // }

//     // if()
// }



// var_dump($users);
// var_dump($products);
// var_dump($chart);