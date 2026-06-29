<?php 

namespace Ayky\Controller ;

class ErrorController extends Controller{
    public function showErrors(string  $errorMessage){
        $this->render("errors/default",[
  "errorMessage" => $errorMessage
        ]) ;
    }
}

/**  Voilà ce qui se passe quand php tourne 
 * 1. $e->getMessage() → "La route n'existe pas"
*2. showErrors() reçoit le message
*3. render() envoie à default.php
*4. $errorMessage s'affiche  
 */