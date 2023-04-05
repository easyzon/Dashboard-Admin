<?php
    include('function.php');

        if(isset($_SESSION['auth']))
        {
            if($_SESSION['role_as'] !=1 )
            {
                redirect('../index.php',"You have No Access of this page");       
            }
        }
        else
        {
            redirect("../login.php","Login to Continue");
        }


?>