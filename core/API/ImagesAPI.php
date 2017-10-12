<?php 

class ImagesAPI{

	protected $pdo;

	public function __construct(PDO $pdo)

	{

		$this->pdo = $pdo;
	}
	
	public function insererImage($name)
	
	{
		
		$ret        = false;
        $img_blob   = '';
        $img_taille = 0;
        $img_type   = '';
        $img_nom    = '';
        $taille_max = 250000;
        $ret        = is_uploaded_file($name['tmp_name']);
        
        if (!$ret) 
        
        {
 
            return false;
        } 
        else 
        
        {

            // Le fichier a bien été reçu
            $img_taille = $name['size'];
            $img_type   = $name['type'];
            $img_nom    = $name['name']; 

            if ($img_taille > $taille_max) 
                return false;

            if($img_type != 'image/png' && $img_type != 'image/jpeg')  
                    return false;

            $img_type = $name['type'];
            $img_nom  = $name['name'];


            $req = "INSERT INTO `images` (img_nom,img_taille,img_type) VALUES ('{$img_nom}','{$img_taille}','{$img_type}')";

            $statment = $this->pdo->prepare($req);

            $statment->execute();

            $oldpath = $name['tmp_name'];
            $newpath ="images/".$name['name'];
            move_uploaded_file($oldpath, $newpath);

            return true;
        }	
	}

    public function lastIdInserer()
    
    {
        $id = (int)$this->pdo->lastInsertId();
        return $id;
    }

}