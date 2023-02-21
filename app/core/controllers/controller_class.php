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
    public function __construct ($databaseConfig) {

        try {
            $this->modelPages = new Pages_Model($databaseConfig);

        } catch (\Throwable $er) {
            echo (" (controller_class.php) Tidak bisa mengakses MODEL: " . $er->getMessage());

        }

    }
    
}
?>