<?php

include("app/core/controllers/controller_class.php");

// Class
class Project_Controller extends Controller {

    // Atribute
    public $dataPage;

    // Constructor
    public function __construct ($databaseConfig, $nameFile) {

        try {
            parent::__construct($databaseConfig);
            $this->dataPage = $this->modelPages->select()->where("page='$nameFile'")->getColumn();

            $this->pageTitle = ucfirst($nameFile);
            $this->pageDecs = $this->dataPage["deskripsi"];
            $this->pageImage = $this->dataPage["gambar"];
            $this->pageKeyword = $this->dataPage["keyword"];

        } catch (\Throwable $er) {
            echo ("home_controller error:" . $er->getMessage());

        }

    }

} $controller = new Project_Controller($databaseConfig, $nameFile);

?>