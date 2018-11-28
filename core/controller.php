<?php
class controller {

    /* CRIANDO AJUDADORES */
    public function loadView($viewName, $viewData = array()) {
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }

    public function loadTemplate($viewName, $viewData = array()) {
        require 'views/template.php';
    }

    public function loadViewInTemplate($viewName, $viewData = array()) {
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }

}