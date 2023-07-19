<?php

// $name = 'Cosmin';

// $name = 'Jon';

// define("PI", 3.1415927);

// echo PI;

// // boolean 
// $bool = TRUE;

// // float - a decimal number
// $decimal = 3.14;

// // null abscence of data
// $example = 'Hi,' .  "\n"  . 'my name is' .$name;
// echo $example;

// print($example);

//var_dump shows what is inside of a variable, similar to console.log from JS
// $names = ['mike','josh','alex'];
// var_dump($names);

// String
// $name = 'Cosmin';
// echo $name;
// // //Boolean
// // $bool = TRUE;
// // echo $bool;
// //float
// $decimal = 2.3;
// echo $decimal;
// // Array
// $cities = ['Bath','Bristol','Cardiff'];
// var_dump($cities);

// // variable interpolation
// echo "Hi," . "\n" . "my name is " . $name . " and my favorite number is " . $decimal;

//Operators
//Remainder
// echo 5 % 2 == 1;
//Compound assigments
// $output = 'Hi my name is';
// $output .= ' Mike';

// echo $output;

// $age = 19;

// if ($age > 13 && $age < 20) {
//     echo " You're a teenager";
// }

// $condition = TRUE;
// $condition2 = TRUE;

// if ($condition) {
//     //code to execute
// } else if ($condition2) {
//     // code to execute if contion2 is true
// } {
//     //code to execute if false
// }

// $age = 28;

// if ($age > 17) {
//     echo 'your an adult';
// } else if ($age > 12) {
//     echo 'your an teenager';
// } else {
//     echo 'your a child';
// }

// //ternary operator
// echo ($age > 17 ? ' your an adult' : 'your a child');

// $random = rand(1, 2) ;

// if($random >= 2) {
//     echo ' heads';
// } else {
//     echo ' tails';
// };

// Arrays
// indexed array

// $shoppingList = ['Eggs', 'Bacon','Sausages','Mushrooms'];

// //Associative array
// $dataAboutAsh = [
//     'fname' =>'Ash',
//     'lname' => 'Coles',
//     'age' => 28,
//     'carcolor' => 'grey'
// ];
// // => means Key value pair indetifier

// // var_dump ($shoppingList)
// // var_dump ($dataAboutAsh)

// echo $shoppingList[0]; 
// echo $dataAboutAsh['lname']; 

// //adding things to the array
// $shoppingList[] = 'Hash browns';
// $shoppingList[] = 'Toast';
// $shoppingList[] = 'HP fruity';



// //change things in a Array
// $shoppingList[3] = 'Pancakes';



// //chnage things in an array with keys
// $dataAboutAsh['favfood'] = 'Pizza';
// var_dump($dataAboutAsh);

// // Removing stuff from an array

// unset($shoppingList['2']);
// echo '<pre>';
// var_dump($shoppingList);
// echo '</pre>';

//foreach loop
// $shoppingList = ['Eggs', 'Bacon','Sausages','Mushrooms' ,'Bacon'];

// foreach($shoppingList as $item) {

//     echo $item . '<br>';

// }

// $studentsNames = ['Josh','Alex','Cosmin','Colin'];
// $rand_studends = array_rand($studentsNames, 2);
// foreach($studentsNames as $student) {
//     echo '<p>' 
//         var_dump($student($rand_students));
//         echo '</p>'

// // };

// $mapMarkers = [
//     [1.2, -0.4],
//     [1.7, -0.4],
//     [0.2, -0.4],
// ];

// //Looping in a Multidimension array
// foreach ($mapMarkers as $marker) {

//         echo $marker[0];
//         echo $marker[1];
// };
// $students = [
//    'name' => [
//     'Colin',
//     'Cosmin',
//     'Alex',
//     'Josh'
//    ] ,
//    'hometown' => [
//     'New York',
//     'Bistrita',
//     'Wells',
//     'Bristol'
//    ],
//    'favfoods' => ['Pizza','Spaghetti','Fish','Curry']
//    ];

//    foreach($students as $student) {
//         foreach($student as $value) {
//             echo $value;
//         }
//    }

//    var_dump($students);
// echo "<ul>";
// $classmates = [
//                  ['name' => 'Colin',
//                     'hometown' => 'New York',
//                     'favfoods' => ['pizza','steak']],

//                  ['name' =>'Cosmin',
//                     'hometown' => 'Bistrita',
//                     'favfoods' => ['sushi','tacos']],
//                 ['name' => 'Alex',
//                     'hometown' => 'Wells',
//                     'favfoods' => ['pizza','fish']],

//     'student4' => ['name' => 'Josh',
//                     'hometown' => 'Bristol',
//                     'favfoods' => ['kebab','curry']]
//  ];
//  foreach($classmates as $classmate) {
//         // echo "<li>" . $classmate['name'] . "</li>";
//         foreach ($classmate as $mate ) {
//             echo "<li>" . $mate['favoritefoods'] . "</li>";
//         }
// }
//  echo "</ul>";

// Functions

// function calculatePriceWithVAT() {
//     echo "I am a function!";
// }
// calculatePriceWithVAT();
// function greeter(string $firstname, string $surname) {
//     return "Hello,$firstname $surname";
// }

// echo  greeter(firstname:"Cosmin", surname:"Sas");

// $products = [
//     ['title' => 'bread',
//       'price' => 1.5],
//     ['title' => 'water',
//       'price' => 1],
//     ['title' => 'beans',
//       'price' => 1.5],
//     ['title' => 'rice',
//      'price' => 2]
// ];
// $total = 0;
// foreach($products as $product) {
//     $total += $product['price'];
// };
// echo $total;
// function productsFunction(array $products,float $vatRate = 1.2) {
//     $total = 0;
//     foreach($products as $product) {
//         $total += $product['price'];
//     };
//     return $total * $vatRate;
// }
// echo productsFunction($products);


//Blackjack game

$cards =
  [   "2" => 2,
      "3" => 3,
      "4" => 4,
      "5" => 5,
      "6" => 6,
      "7" => 7,
      "8" => 8,
      "9" => 9,
      "10" =>10,
      "J" => 10,
      "Q" => 10,
      "K" => 10,
      "A" => 11
];

  foreach ($cards as $card ) {
      $new_deck[] = $card . "";
      $new_deck[] = $card . "";
      $new_deck[] = $card . "";
      $new_deck[] = $card . "";
     
  }
    shuffle($new_deck);
    $player1 =  array_slice($new_deck,50);
    shuffle($new_deck);
    $player2 =  array_slice($new_deck,50);
    $player1sum = 0;
    foreach($player1 as $player) {
      $player1sum += $player;
    }
    
    echo "<pre>";
    echo $player1sum;
    echo "</pre>";
    $player2sum = 0;
    foreach($player2 as $player) {
      $player2sum += $player; 
    }
    echo $player2sum;
    
      echo "<pre>";
      var_dump($player1);
      var_dump($player2);
      echo "</pre>";
  
function game(float $player1,float $player2){ 
  if($player1 <= 21 && $player1 > $player2) {
    echo "Player 1 Win";
  } else if ($player2 <= 21 && $player2 > $player1) {
    echo "player 2 win";
  } else {
    echo 'Both players lose';
  }

  };

game($player1sum,$player2sum);