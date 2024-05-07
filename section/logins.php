<?php
/* if(!isset($_SESSION)){
    session_start();
    }
    $error=[];
    $db= mysqli_connect('localhost','root','','sectionin');
if (isset($_POST["login"])){
    $us=mysqli_real_escape_string($db,$_POST["name"]);
    $ps=mysqli_real_escape_string($db,$_POST["password"]);
    if(empty( $us)){
        array_push($error,'us is empty');
    }
    if(empty( $ps)){
        array_push($error,'ps is empty');
    }
    if(count($error)==0){

        $query="SELECT* FROM user WHERE namee='?' AND pass='$ps'";
        $r= mysqli_query($db,  $query);
        if(mysqli_num_rows( $r)==1){
            $_SESSION['namee']=$us;
            $_SESSION['success']="welcome ";
            header('location:index.php');



        }
    }

}*/

?>
<?php
session_start();

$error = [];
$db = mysqli_connect('localhost', 'root', '', 'sectionin');

if (isset($_POST["login"])) {
    $us = mysqli_real_escape_string($db, $_POST["name"]);
    $ps = mysqli_real_escape_string($db, $_POST["password"]);

    if (empty($us)) {
        array_push($error, 'Username is empty');
    }
    if (empty($ps)) {
        array_push($error, 'Password is empty');
    }
    if (count($error) == 0) {
        // Prepare and execute a SQL query using a prepared statement
        $query = "SELECT * FROM user WHERE namee=?"; // Assuming 'namee' is the username column
        $stmt = mysqli_prepare($db, $query);
        mysqli_stmt_bind_param($stmt, 's', $us);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            // Verify password
            if (password_verify($ps, $row['pass'])) { // Assuming 'pass' is the hashed password column
                $_SESSION['namee'] = $us;
                $_SESSION['success'] = "Welcome";
                header('location:index.php');
                exit; // Terminate script after redirect
            } else {
                array_push($error, 'Invalid password');
            }
        } else {
            array_push($error, 'User not found');
        }
    }
}
?>

