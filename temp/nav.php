<?php
$dir  = $_SERVER["DOCUMENT_ROOT"].'\pages';
$files = array_diff(scandir($dir), array('..', '.'));
$arr_pages = array();
foreach ($files as $page){
	$page_fr = explode("-", $page);
	
	if($page_fr[0].str_replace(".php", "", $page_fr[1])==$_GET["page"]){
		$active = " active";
	}else{
		$active = "";
	}
	if($page_fr[0]=="lesson" && is_numeric(str_replace(".php", "", $page_fr[1]))){
		$arr_pages[] = array(
							"get"		=>	$page_fr[0].str_replace(".php", "", $page_fr[1]),
							"name" 		=>	"Урок ".str_replace(".php", "", $page_fr[1]),
							"active"	=>	$active,
							);
	}else{
		$arr_pages[] = array(
							"get"		=>	$page_fr[0].str_replace(".php", "", $page_fr[1]),
							"name" 		=>	$page_fr[0].str_replace(".php", "", $page_fr[1]),
							"active"	=>	$active,
							);
	}
}

?>

<header id="masthead" class="site-header">
	<nav class="navigation">
		<ul>
			<li class="nav_li<?php if(empty($_GET["page"])&& (empty($_SERVER['REQUEST_URI']) OR $_SERVER['REQUEST_URI']="/")){echo ' active';}?>">
				<a href="/">Главная</a>
			</li>
<?php
	foreach ($arr_pages as $page){
		echo '<li class="nav_li'.$page["active"].'"><a href="http://'.$_SERVER['SERVER_NAME'].'?page='.$page["get"].'">'.$page["name"].'</a></li>';
	}
?>
		</ul>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->