<?php

class ArticleAPI{

	protected $pdo;

	public function __construct(PDO $pdo)
	
	{
		
		$this->pdo = $pdo;
	}

	public function insererArticle($titre,$text,$id_img)
	
	{
		$_idImg = (int)$id_img;
		$_titre = $this->pdo->quote($titre);
		$_text = $this->pdo->quote($text);

		$statment = $this->pdo->prepare("INSERT INTO `article` VALUES (NULL,{$_titre},{$_text},$_idImg)");
		
		$e = $statment->execute();

		if($e)
			return TRUE;
		else
			return FALSE;
	}
	
}