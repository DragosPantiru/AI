<html>
<body>
<?php
 echo "<b>Test conexiune la o baza de date</b><br />";
 // realizare conexiune MySQL
 $con = mysqli_connect("localhost","root","");
 if (!$con)
 {
 die('Conexiunea nu a putut fi realizata! ' . mysql_error());
 }
 else echo "<br /> Conexiunea a fost realizata!! <br />";

 // creare baza de date
 if (mysqli_query($con,"CREATE DATABASE bd_test"))
 {
 echo "Baza de date a fost creata!";
 }
 else
 {
 //echo "A aparut o erorare la crearea bazei de date: " . mysqli_error();
 }


 mysqli_select_db($con,"bd_test");
  $sql = "CREATE TABLE Student
 (
 
 Nume varchar(15),
 Numar varchar(15),
 Email varchar(30),
 Adresa varchar(30),
 Mesaj varchar(300),
 )"; 
 $sql="INSERT INTO Student (Nume, Numar, Email, Adresa, Mesaj) VALUES
 ('$_POST[Name]','$_POST[Number]','$_POST[Email]','$_POST[Adress]','$_POST[Message]')";

if (!mysqli_query($con, $sql))
 {
// die('Eroare: ' . mysqli_error());
 }
 echo "A fost adaugata o inregistrare! <br />"; 
 // selectare inregistrari din tabela
 $rez = mysqli_query($con, "SELECT * FROM Student");



 mysqli_query($con,$sql);
// inchidere conexiune
mysqli_close($con);
 echo "<br /> Conexiunea a fost inchisa!! <br />";
?>
</body>
</html> 