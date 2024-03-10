<html>
<body>

<form action="#" method="POST">

Name: <input type="text" name="name"><br><br>

E-mail: <input type="text" name="email"><br><br>

<input type="submit">
</form>

<pre>====================================================</pre>

<?php

echo "Name:".$_POST['name'];
echo "<br><br>";
echo "Email:".$_POST['email'];

?>

</body>
</html>




