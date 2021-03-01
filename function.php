<?php

function add_header(){
	include '/temp/header.php';
}
function add_content(){
	include '/temp/main.php';
}
function add_nav(){
	include '/temp/nav.php';
}
function add_footer(){
	include '/temp/footer.php';
}

function color($i){
	if($i==1){
		$color="green";
	}elseif($i==2){
		$color="blue";
	}elseif($i==3){
		$color="yellow";
	}elseif($i==4){
		$color="pink";
	}elseif($i==5){
		$color="red";
	}elseif($i==6){
		$color="orange";
	}elseif($i==7){
		$color="darkblue";
	}elseif($i==8){
		$color="gray";
	}elseif($i==9){
		$color="violet";
	}elseif($i==0){
		$color="darkviolet";
	}
	return $color;
}