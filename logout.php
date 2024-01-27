

<?php

session_start();

if (isset($_SESSION['auth'])) {


    unset($_SESSION['auth']);
    unset($_SESSION['user-auth']);


}

header('Location: demo.html');

?>