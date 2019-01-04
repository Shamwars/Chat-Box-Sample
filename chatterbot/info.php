
<?php

// making the connection to the database
    try {
        $host = '127.0.0.1:3306';
        $dbname = 'chatterbot';
        $user = 'root';
        $pass = '';
        # MySQL with PDO_MYSQL
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    } catch(PDOException $e) {echo 'Error';}
		
{ 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dname=$_POST['tel'];
$email=$_POST['address'];
}
?>
<h2>Your Profile Information</h2> 

<p><h3>First Name: <?php echo $fname ?></p></h3>
<p><h3>Last Name: <?php echo $lname ?></p></h3>
<p><h3>Phone: <?php echo $tel ?></p></h3>
<p><h3>Address: <?php echo $address ?></p></h3>

<a href="form.html">logout</a>

<p align="center"><a href="form.html"></a></p>