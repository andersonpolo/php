<?php 
//escopo principal 
$nome = "Glaucio";

function teste() {
//escopo da function teste()
		global $nome;
	echo $nome, "<br/>";
//fim do escopo da functio teste()	
}

function teste2() {
//escopo da function teste2()
	
	$nome = "João";
	echo $nome . " agora no teste2";
	
//fim do escopo da function teste2()	
}

teste();
teste2();


//fim do escopo principal
?>