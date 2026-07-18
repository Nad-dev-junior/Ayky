<?php 

namespace Ayky\Controller ;


class PageController  extends Controller{

    public function home(): void{
       $this->render("pages/home");
    }

    public function contact(): void{
       $this->render("pages/contact");
    }
    
    public function jobs(): void{
       $this->render("pages/jobs");
    }
    
    

}