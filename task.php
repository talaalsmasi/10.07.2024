<!-- Q1 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form   >
    
    <input type="email" name="email" > 
    <input type="password" name="password"> <br>
    <input type="submit" value="enter"> 
</form>
<?php
echo "your email is:" . $_GET["email"] . "<br>";
echo "your password is:" . $_GET["password"] . "<br>";
?>
</body>
</html>

<!-- Q2 -->
<!DOCTYPE html>
<body>
    <form >
<input type="search" name="search">
<input type="submit" value="GO">

    </form>
<?php
  $url = $_GET['search'];
    header("Location: $url");
?>

</body>
</html>
<!-- Q4 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>

</head>
<body>
    <div class="container">
        <h1>Todo List</h1>
        <form action="ex44.php" method="POST">
            <input type="text" name="task" placeholder="Enter a new task" required>
            <button type="submit" name="submit">Add Task</button>
        </form>
        
        
        <ul class="task-list">
            
        </ul>
    </div>
    <?php
session_start();
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = array();
}

// Handle task addition
if (isset($_POST['submit']) && !empty($_POST['task'])) {
    $new_task = $_POST['task'];
    array_push($_SESSION['tasks'], array('task' => $new_task));
}


// Display tasks
foreach ($_SESSION['tasks'] as $key => $task) {
    $task_text = htmlspecialchars($task['task']);
    echo "<li >$task_text 
          </li>";
}
?>
</body>
</html>


<!-- Q3,Q5 -->
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form> 
            <input type="text" name="num1" placeholder="firt number">
            <input type="text" name="ope"  placeholder="What operator do you want to use" >
            <input type="text" name="num2" placeholder="second number"> <br> 
        <br>
            <button type=" submit" name="submit" value="submit">  calculate</button>
        </form>
        
        <?php
        $start_time = microtime(true);


            ####################
                  


#cal**********************************
        if (isset( $_GET['submit'])){ 
            $fnum= $_GET['num1'];
            $operator= $_GET['ope'];
            $snum= $_GET['num2'];
        if (  $operator == "+"){ 
            echo  " the answer is:" . $fnum + $snum  ; 
                echo "<br>";
        }
        elseif ( $operator == "-") {
            echo " the answer is:" . $fnum - $snum;
                echo "<br>";
        }
        elseif ( $operator == "*") {
            echo " the answer is:" . $fnum * $snum;
            echo "<br>";
        }
        elseif ( $operator == "/") {
            echo " the answer is:" . $fnum / $snum;
                echo "<br>";
        }
        else {
            echo "Make sure your inputs are correct";
                echo "<br>";
        }


        echo "<br>" . "<br>";



        ####################




        $end_time = microtime(true);
        $execution_time = $end_time - $start_time;
        echo "Time taken to execute script: " . $execution_time . " seconds.";
        }
        ?>
        <?php 

echo "<br>" . "<br>";



        ####################



#******refresh
        session_start();
        if(isset($_SESSION['views'])){
            $_SESSION['views'] = $_SESSION['views'] + 1;
        }else{
            $_SESSION['views'] = 1;
        }
        



        echo "Total page views = " . $_SESSION['views'];
        echo "<br>" . "<br>";



       ####################

#******time
echo "your req started at " . $date = date("H:i:s");

####################
echo "<br>" . "<br>";
 
#******time
 echo $_SERVER['HTTP_HOST']; 
 
 echo $_SERVER['SERVER_NAME'];
 #######################################
 
 echo "<br>" . "<br>";



#****** #visitors
session_start();


if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

$_SESSION['counter']++;

echo "<h1>Visitor Count: {$_SESSION['counter']}</h1>";


?>


        </body>
        </html>

<!-- Q9 -->
<?php
$cookie_name = "Cookie";
$cookie_value = "user";
$cookie_time = time() + 3600; 
$cookie_path = "/aaa/ex9"; 
$cookie_domain = ".example.com";
$cookie_secure = true; 

setcookie($cookie_name, $cookie_value, $cookie_time, $cookie_path, $cookie_domain, $cookie_secure);
?>

<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Name is: " . $_COOKIE[$cookie_name] . "<br>";

  echo "Value is: " . $cookie_value . "<br>";

  echo "Expire time is: " . date('Y-m-d H:i:s', $cookie_time) . "<br>";
  echo "Cookie path is: " . $cookie_path . "<br>";
  echo "Cookie domain is: " . $cookie_domain . "<br>";
  echo "Cookie secure is: " . ($cookie_secure ? 'true' : 'false') . "<br>";
}
setcookie("user", "", time() - 3700);
?>

</body>
</html>