<?php
//require_once 'phpFunctions.php'; 
require_once 'dbcontroller.php';
$connection = new DBController(); 
if(isset($_POST['saveCadet']))
{
    
    $key = $_POST['ssnKey']; 
    if(isset($_POST['attachments']))
    { 
        importFile("cadet","saveCadet","attachment", $_POST['ssnKey']);
    }
    
    
    
    if(isset($_POST['ssn']))
    {
        $ssn = $_POST['ssn']; 
        $connection->runQuery("UPDATE cadets SET ssn = '$ssn' WHERE ssn = '$key'");
    }
    
    if(isset($_POST['inputFirstName']))
    {
        $firstName = $_POST['inputFirstName']; 
        $connection->updateQuery("UPDATE cadets SET fName = '$firstName' WHERE ssn = '$key'"); 
        
    }
    if(isset($_POST['inputMiddleName']))
    {
        $firstName = $_POST['inputMiddleName']; 
        $connection->updateQuery("UPDATE cadets SET mName = '$firstName' WHERE ssn = '$key'"); 
        
    }
    if(isset($_POST['inputLastName']))
    {
        $firstName = $_POST['inputLastName']; 
        $connection->updateQuery("UPDATE cadets SET lName = '$firstName' WHERE ssn = '$key'"); 
        
    }
    if(isset($_POST['inputGenQual']))
    {
        $firstName = $_POST['inputGenQual']; 
        $connection->updateQuery("UPDATE cadets SET genQual = '$firstName' WHERE ssn = '$key'"); 
        
    }

   echo '<script> alert("Cadet has been Updated!"); </script>'; 
    header("refresh:2;url=allCadetView.php"); 
    
    //echo "Button is pushed";
    
}
?>