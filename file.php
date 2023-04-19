<?php
#variable 

// $a =;

#using global key and function 

// $b =17;
// function func(){
//     global $a,$b ;
//     $b = $a+$b;
// }
// func()
// echo $b;

#using static key in funtion
// function func(){
//     static $a = 0;
//     echo($a);
//     $a++ 
// }
// func();
// func();
// func();
// $a = true;
// $val = printf(10===10);
// $val = 1.23;
// echo var_dump($val);


#using class in php and used constructor method 
//  class main{
//     public $name ;
//     public $roll_no;
//     public function __construct($name,$roll_no){
//         $this->name = $name;
//         $this->roll_no =$roll_no;
//     }
//     function run(){
//         return "my name is ".$this->name ." and roll no. ".$this->roll_no;
//     }


//  }
//  $myName = new main("saurabh","101");
//  echo $myName ->run();

// $val ='saurabh';
// // echo var_dump($val);
// $value = (int)$val;
// // scho var_dump($value);
// echo $value;

// $x =19;
// $y = 10;

// function myFun(){
//     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

//  myFun();
//   echo $z;





#form handling

#index.php
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>
   
//     <form action ="file2.php" method="post">
//         Enter your Name :<input type = "text" name="name">
//         Enter your Email :<input type ="text" name ="email">
//         <input type="submit">
//     </form>
   
// </body>
// </html> 


#file2.php
// <!DOCTYPE html>
// <html>
// <body>

//         welcome <?php echo $_POST["name"]; 

         //Your Email is <?php echo $_POST["email"]; 
    
    
// </body>
// </html>

# form validation 

// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>
   
//     <?php  
//     $name=$email=$sname=$comment=$gender= "";
//     if($_SERVER["REQUEST_METHOD"]=="POST"){
//         $name = test_input($_POST["name"]);
//         $email = test_input($_POST["email"]);
//         $sname = test_input($_POST["sname"]);
//         $comment = text_input($_POST["comment"]);
//         $gender = text_input($_POST["gender"]);
//     }
//         ?>
<!-- //     <form method="post" action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>"> -->
<!-- //           Name <input type="text" name="name">
//           Email <input type="email" name="email">
//           School Name <input type="text" name="sname">
//           comment  <textarea name="comment" rows ="5" cols="4"></textarea><br>
//           Gender :<input type="radio" name="gender">Female
//           <input type="radio" name="gender" >Male
//           <input type="radio" name="gender">Other<br>
//           <input type="submit" value="submit">
//     </form> -->

//   <?php
//     echo "my name is ".$name;
//     echo "email is : ".$email;
//     echo "surname name is : ".$sname;
//     echo "text : ".$comment;
//     echo "gender : ".$gender;
//     ?>
   
<!-- // </body>
// </html> -->
// ?>