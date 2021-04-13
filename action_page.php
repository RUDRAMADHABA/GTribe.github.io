 <?php
 $myfile = fopen("query.txt", "a") or die("Unable to open file!");
      $txt = "\n";
 $hr = "---------------------------------------------------" ;
 fwrite($myfile, $txt);
 $name = $_POST["name"];
 $email = $_POST["email"];
 $msg = $_POST["message"];
 //$subj = $_POST["subject"];

 fwrite($myfile,$name);
 fwrite($myfile,$txt);
 fwrite($myfile, $email);
 fwrite($myfile,$txt);
 
 fwrite($myfile,$msg);
 fwrite($myfile, $hr );

 fclose($myfile);
 ?>
