<?php
require'../includes/connect.php';
if($_POST['addContact']){

    if(isset($_POST['addContact'])){

        $cname=$_POST['companyname'];
        $address=$_POST['address'];
        $cphone=$_POST['cell_phone'];
        $lphone=$_POST['landline_phone'];       
        $email=$_POST['email'];
        $map=$_POST['map'];
        $skype=$_POST['skype'];
        $facebook=$_POST['facebook'];
        $twitter=$_POST['twitter'];
        $linkedin=$_POST['linkedin'];

        $query=mysql_query("INSERT INTO contact VALUES ('','$cname','$address','$cphone','$lphone','$email','$map','$skype','$facebook','$twitter','$linkedin') ") or die(mysql_query());
        header('location:contact-us.php');

    }   
    else{
        header('location:contact-us.php');
    }
}
?>