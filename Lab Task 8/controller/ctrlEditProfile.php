<?php
 $data = file_get_contents("../DATA/data.json");
 $data = json_decode($data, true);

 foreach($data as $row)
 {

     if($_SESSION['passkey']==$row['password'])
     {
         $_SESSION['tname']=$row['username'];
         $_SESSION['tmail']=$row['e-mail'];
         $_SESSION['tgender']=$row['gender'];
         $_SESSION['day']=$row['dd'];
         $_SESSION['month']=$row['mm'];
         $_SESSION['year']=$row['yyyy'];
         break;
     }
 }
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
     if(isset($_POST['submit']))
     {
         $data = file_get_contents("../DATA/data.json");

         $data = json_decode($data,true);

         foreach($data as $row)
         {

             if($_SESSION['passkey'] == $row['password'])
             {
                 $row['username'] = $_POST['usname'];

                 $row['e-mail'] = $_POST['email'];
                 $row['gender'] = $_POST['gender'];

                 break;
             }
         }

         file_put_contents('../DATA/data.json', json_encode($data));
     }
   }
?>