<?php
if(isset($_POST["submit"])){
$text = $_POST["text"];
echo strrev($text);
}
 ?>

<h1>с обработкой на другой странице</h1>
<form action="server.php" method="post">
<input type="text" name="text">
<input type="submit" name="submit" value="отправить">
</form>
<h1>с обработкой на этой странице</h1>
<form action="<? echo $_SERVER['REQUEST_URI'];?>" method="post">
<input type="text" name="text">
<input type="submit" name="submit" value="отправить">
</form>