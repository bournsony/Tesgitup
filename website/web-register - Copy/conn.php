<?php
$conn = new mysqli("localhost", "root", "", "loging");
if (isset($_POST['register'])) {
 $username= mysqli_real_escape_string($_POST['username']);
}
?>