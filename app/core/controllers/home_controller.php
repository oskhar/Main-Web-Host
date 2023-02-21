<?php

include("app/core/controllers/controller_class.php");

// Class
class Home_Controller extends Controller {

    // Atribute
    public $dataPage;

    // Constructor
    public function __construct ($dataConfig, $nameFile) {

        try {
            parent::__construct($dataConfig);
            $this->dataPage = $this->modelPages->where("page='$nameFile'");

            $this->pageTitle = ucfirst($nameFile);
            $this->pageDecs = $this->dataPage->select("deskripsi")->get();
            $this->pageImage = $this->dataPage->select("gambar")->get();
            $this->pageKeyword = $this->dataPage->select("keyword")->get();

        } catch (Exception $er) {
            echo ("home_controller error:" . $er->getMessage());

        }

    }

} $controller = new Home_Controller($databaseConfig, $nameFile);

?>