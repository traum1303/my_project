<?php 

require 'function.php';
add_header();
add_nav();
if(isset($_POST["submit"])){
$text = $_POST["text"];
echo strrev($text);
}

?>
<a href="<?php echo $_SERVER['HTTP_REFERER'];?>">назад</a>

<?php
add_footer();
?>

