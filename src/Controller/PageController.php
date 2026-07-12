<?php 

namespace Ayky\Controller ;


class PageController  extends Controller{

    public function home(): void{
       $this->render("pages/home");
    }

    public function about(): void{
       $this->render("pages/about");
    }
    
    public function jobs(): void{
       $this->render("pages/jobs");
    }
    
    

}