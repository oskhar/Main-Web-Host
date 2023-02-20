<?php

include("app/core/models/model_class.php");

// Class
class Pages_Model extends Model {

    // Constructor
    public function __construct($databaseConfig) {

        parent::__construct($databaseConfig);
        $this->table = "pages";

    }

}
?>