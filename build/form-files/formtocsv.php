<?php

//enable error reporting for rooting out bugs 
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

 
$name = htmlspecialchars($_POST['form_name']);
$email = htmlspecialchars($_POST['form_email']);
$subj = htmlspecialchars($_POST['form_subj']);
$msg = htmlspecialchars($_POST['form_msg']);

//using str_replace to remove commas so the subj and msg do not mess with the formdata.csv file.
$csv_subj = str_replace( ',', '', htmlspecialchars($_POST['form_subj'])); 
$csv_msg = str_replace( ',', '', htmlspecialchars($_POST['form_msg']));

$csvData = $name . "," . $email . "," . $csv_subj . "," . $csv_msg;

//store data into formdata.csv file. 
$fp = fopen("formdata.csv", "a"); //$fp is the file pointer to formdata.csv
if ($fp) {
    fwrite($fp, $csvData."\n"); //data is written to the csv file on a new line. 
    fclose($fp);
}

//immediately mail me a copy of the form submission.  
$me = "acgreene@umich.edu";
$headers = "From: ".$email; 
$txt = "Beep, Boop. You have received an e-mail from ".$name.".\n\n".$msg;

mail($me, $subj, $txt, $headers);

//re-directs the user back to the contact page so that they don't see the php. 
header("Location: ../contact.html");
?>