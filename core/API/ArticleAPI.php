<?php

class ArticleAPI{

	protected $pdo;

	public function __construct(PDO $pdo)
	
	{
		
		$this->pdo = $pdo;
	}

	public function insererArticle($titre,$text,$position,$id_img)
	
	{
		$_idImg = (int)$id_img;
		$_position = (int)$position;
		$_titre = $this->pdo->quote($titre);
		$_text = $this->pdo->quote($text);

		$statment = $this->pdo->prepare("INSERT INTO `article` VALUES (NULL,{$_titre},{$_text},{$_position},$_idImg)");
		echo "INSERT INTO `article` VALUES (NULL,{$_titre},{$_text},{$_position},$_idImg)";
		$e = $statment->execute();

		if($e)
			return TRUE;
		else
			return FALSE;
	}

	public function selectArticle($extra = '')
	
	{
		
		$statment = $this->pdo->prepare("SELECT * FROM `article` {$extra}");
		echo "SELECT * FROM `article` {$extra}";
		$e = $statment->execute();

		if(!$e)
			return NULL;
		
		return $statment->fetchAll(PDO::FETCH_OBJ);
	}

	public function selectWithPosition($position)
	
	{
		$_pos = (int)$position;

		$select = $this->selectArticle("WHERE `position` = {$_pos}");


		if($select != NULL)
			return $select;

		else
			return NULL;
	}
	
}