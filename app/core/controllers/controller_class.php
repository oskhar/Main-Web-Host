<?php

include("app/core/models/pages_model.php");

// Class
class Controller {

    // Atribute
    private $pathComponent = "app/views/shared/widgets/";
    public $modelPages;
    public $pageTitle;
    public $pageDecs;
    public $pageImage;
    public $pageKeyword;

    // Constructor
    public function __construct ($dataConfig) {

        try {
            $this->modelPages = new Pages_Model($dataConfig);

        } catch (Exception $er) {
            echo (" (controller_class.php) Tidak bisa mengakses MODEL: " . $er->getMessage());

        }

    }

    // Method
    public function addComponent ($nameComponent) {
        include($this->pathComponent . $nameComponent);

    }
    
}
?>