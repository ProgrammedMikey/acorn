<?php 

session_start();
include('header.php');
include('validater.php'); 

$user=array(); 

if (isset($_SESSION['userID'])) {
    require('sql_connection.php'); 
    $user = get_user_info($con, $_SESSION['userID']);
}
?>

<div class="wrapper"> 
<p>Thank you <?php 
if (isset($user['firstName'])) {
    printf($user['firstName'], $user['lastName']);
}
?>
</p>

</div>


<?php 
include("footer.php");
?>