<?php 

namespace Ayky\Controller ;

class Controller{

    public function render(string  $path, array $params = []): void{
    $filePath= APP_ROOT."/templates/$path.php";

    if(!file_exists($filePath)){
     echo "ce fichier n'existe pas";
    }else{
     // extract va transformer chaque cle du tableau en variable
     extract($params);
     require_once $filePath ;
    }

}
 
}

    
 