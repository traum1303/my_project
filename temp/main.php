<?php 
	$page = $_GET["page"];
	$page = str_replace("lesson", "lesson-", $page);
?>
<div id="content" class="site-content">
	<main id="main" class="site-main">
<?php
	if(!empty($page)){
		include '/pages/'.$page.'.php';
	}else{
		echo 'Hello, <b>NIX Education</b>';
	}
?>
	</main><!-- #main -->
</div><!-- #content -->








