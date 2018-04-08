<?php
namespace MVC\CONTROLLERS;
use MVC\LIBS\Helper;

class LanguageController extends AbstractController{
    use Helper;
    public function defaultAction(){
        // echo $_SESSION['lang'] ."<br>";
        if($_SESSION['lang'] == 'ar'){
            $_SESSION['lang'] = 'en';
        }else{
            $_SESSION['lang'] = 'ar';
        }
        $this->redirect($_SERVER['HTTP_REFERER']);
    }
}