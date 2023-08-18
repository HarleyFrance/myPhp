<?php
/*
Statically-typed 
  Developers must explicitly set the type of a variable.
  The type may never change after declaration .
*/

/*
Dynamically-typed
    Developers do not need to set the type.
    Data types may change at any time.
*/

//PHP IS DYNAMICALLY-TYPED

/*
PHP DATA TYPES
    1. null
    2. bool
    3. int
    4. float (floating-point number)
    5. string
    6. array
    7. object
    8. callable
    9. resource
*/

//Null Data type
// $data = null;
// var_dump($data);

//Bool Data type;

// $isLogggedIn = TRUE;
// $hasBlogPosts;

// var_dump($isLogggedIn);

//Int & Float
#Int
  // $data = 5_000_000;
  // var_dump($data);

#Float
  // $data = 123.45;
  // var_dump($data);

//String

$firstName = "Harley France";
$lastName = "$firstName Paano";

$lastName[3] = "x";
var_dump($lastName[3]);

//String Interpolation
  #String interpolation is the process of replacing a placeholder with a value
