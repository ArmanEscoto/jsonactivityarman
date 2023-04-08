<?php
    header('Access-Control-Allow-Origin: *');
    // root
    $foods = [
        [   
            "img" => "sandwich.jpg",
            "name" => "Breakfast",
            "origin" => "Estados Unidos",
            "item" => "Breakfast Sandwich",
            "dishes" => ["Egg Sandwich","Chiken Sandwich","Tuna Sandwich","Bacon Sandwich"]
        ],
        [   
            "img" => "pizza.jpg",
            "name" => "Junkfood",
            "origin" => "Italya",
            "item" => "Pizza",
            "dishes" => ["Neapolitan Pizza","Chicago Pizza","New York-Style Pizza","Sicilian Pizza"]
        ],
        [   
            "img" => "adobo.jpg",
            "name" => "Lunch",
            "origin" => "Philippine",
            "item" => "Adobo",
            "dishes" => ["Chicken Adobo","Pork Adobo","Beef Adobo","Duck Adobo"]
        ],
        [   
            "img" => "snack.jpg",
            "name" => "Snack Time",
            "origin" => "Estados Unidos,at Europa.",
            "item" => "Snacks",
            "dishes" => ["Potato Chips","Popcorn","Oreos","Cheetos"]
        ],
        [   
            "img" => "lechon.jpg",
            "name" => "Dinner",
            "origin" => "Phillipines",
            "item" => "Lechon",
            "dishes" => ["Letchon Manok","Letchon Baka","Letchon Baka","Lechon Duck"]
        ],
     
       
    ];

    $data = json_encode($foods);
    echo $data;
    
?>