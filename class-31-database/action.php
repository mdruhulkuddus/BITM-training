<?php
require_once 'vendor/autoload.php';
use App\classes\Student;

    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'home') {
            include 'pages/home.php';
        }
    }
    elseif ($_POST){
        if (isset($_POST['submit'])){
           $student = new Student();
           $student->newStudent($_POST);
        }

    }
    else{
        $home = new Home();
        $home->index();
    }





//
//echo '<pre>';
//print_r($database);










































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































