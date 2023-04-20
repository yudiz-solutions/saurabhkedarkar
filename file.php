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
//     $name=$email=$sname=$comment=$gender=$mobile= "";
//     if($_SERVER["REQUEST_METHOD"]=="POST"){
//         $name = test_input($_POST["name"]);
//             if(is_string(!$name)){
//                 echo "please enter name ";
//             }
//            $email = $_POST["email"];
//            $sname = $_POST["sname"];
//            $mobile = $_POST["mobile"];
//                 if($mobile != 10){
//                     echo "please  10 digit " ;
//                 }
//            $comment = $_POST["comment"];
//            $gender = $_POST["gender"];
           

//     }

//     function test_input($data){
        
//         $data = trim($data);
//         $data =stripslashes($data);
//         $data =htmlspecialchars($data);
//         return $data;
//     }
//         ?>
<!-- //     <form method="post" action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
//           Name <input type="text" name="name">
//           Email <input type="email" name="email">
//           School Name <input type="text" name="sname">
//           Mobile no <input type="number" name="mobile">
//           Comment  <textarea name="comment" rows ="5" cols="4"></textarea><br>
//           Gender <input type="radio" name="gender">Female
//           <input type="radio" name="gender" >Male
//           <input type="radio" name="gender">Other<br>
//           <input type="submit" value="submit">
//     </form> -->

//   <?php
//     echo "my name is ".$name;
//     echo "email is : ".$email;
//     echo "surname name is : ".$sname;
//     echo "mobile number :" .$mobile;
//     echo "text : ".$comment;
//     echo "gender : ".$gender;
     ?>
   
<!-- // </body>
// </html> -->

 
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
//    $nErr=$passErr="";
//    $name=$pass="";

//    if($_SERVER["REQUEST_METHOD"]=="POST"){
//     if(empty($_POST["name"])){
//         $nErr = "name is Requere";
//     }else{
//         $name = $_POST["name"];
//     }
//     if(empty($_POST["pass"])){
//         $passErr = "password is requere";
//     }else{
//         $pass = $_POST["pass"];
//     }
//    }
   ?>


   <form action ="<?php //echo $_SERVER["PHP_SELF"] ?>" method = "post">
        Name : <input type="text" name="name">
        <span class="Error"><?php //echo $nErr?></span><br><br>
        Password :<input type="password" name="pass">
        <span class="Error"><?php //echo $passErr?></span><br><br>
        <input type="submit" value="submit">
   </form>
   
   <?php 
    //  echo "your name is :".$name;
    //  echo "password is :".$pass;

    ?>

   //date and time
    <?php 
        echo "Today data is :".date('Y/m/d')."\n";
        echo "Today data is :".date("h:i:s")
    ?> 
  ?>

  #using include
  <html>

<body>
   <h3>hello saurabh</h3>
   <?php //echo include 'file2.php'; ?>
</body>
</html>

#second file in php
<?php 
// echo "what are you doing";
?>


#cookies
<?php
// $cookie_name = "user";
// $cookie_value = "John Doe";
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
// if(!isset($_COOKIE[$cookie_name])) {
//   echo "Cookie named '" . $cookie_name . "' is not set!";
// } else {
//   echo "Cookie '" . $cookie_name . "' is set!<br>";
//   echo "Value is: " . $_COOKIE[$cookie_name];
// }
?>

</body>
</html>

</body>
</html> -->
