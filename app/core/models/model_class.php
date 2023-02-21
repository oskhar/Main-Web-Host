<?php
// Class
class Model {

    // Atribute
    protected $conn;
    protected $table;

    private $data = array();
    private $setData = "";
    private $sql = "";
    private $result;

    private $select = "";
    private $join = "";
    private $where = "";
    private $order = "";
    private $limit = "";

    // Constructor
    public function __construct ($databaseConfig) {

        $this->conn = null;
        $this->conn = mysqli_connect($databaseConfig['HOST'], $databaseConfig['USER'], $databaseConfig['PASS'], $databaseConfig['DB_NAME']);
        if($this->conn === false)
            die(" (model_class.php) Tidak bisa KONEKSI ke database: " . mysqli_connect_error());

    }

    // Method select
    public function select ($column = '') {

        try {
            if (is_array($column))
                $tmp = implode($column, ", ");
            else
                $tmp = "*";
            
            $this->select = "SELECT " . $tmp . " FROM " . $this->table;
            return $this;
            
        } catch (Exception $er) {
            echo (" (model_class.php) Proses select bermasalah: " . $er->getMessage());

        }

    }

    // Method join
    public function join ($table, $param, $join = "JOIN") {

        try {
            if (is_array($table)) {
                for ($i = 0; $i < sizeof($table); $i++) {

                    $this->join = " $join $table[$i] ";
                    $this->join .= " ON " . $table[$i] . "." . $param[$i][0] . "=" . $table[$i] . "." . $param[$i][1];

                }

            } else {
                $this->join = " $join $table ";
                $this->join .= " ON " . $table . "." . $param;

            }

            return $this;

            
        } catch (Exception $er) {
            echo (" (model_class.php) Proses JOIN bermasalah: " . $er->getMessage());

        }

    }

    // Method where
    public function where ($rule = "") {

        try {
            $tmp = array();
            if (is_array($rule)) {
                foreach ($rule as $rl)
                    array_Push($tmp, $rl);
                
                $this->where = "WHERE " . implode($tmp, " AND ");
                return $this;
            }
            else
                $this->where = "WHERE " . $rule;
                return $this;
                    
        } catch (Exception $er) {
            echo (" (model_class.php) Proses WHERE bemasalah: " . $er->getMessage());

        }

    }

    // Method order
    public function order ($column, $sort = "ASC") {
        $this->order = "ORDER BY $column $sort";
        return $this;

    }

    // METHOD limit
    public function limit ($a, $b = 0) {

        try {
            $this->limit = "LIMIT " . $a;
            if (!empty($a))
                $this->limit .= $b;
            
            return $this;

        } catch (Exception $er) {
            echo (" (model_class.php) Proses LIMIT bermasalah:" . $er->getMessage());

        }

    }

    // Method get
    public function get () {

        try {
            $this->sql = $this->select . " ";
            $this->sql .= $this->join  . " ";
            $this->sql .= $this->where . " ";
            $this->sql .= $this->order . " ";
            $this->sql .= $this->limit;

            $this->result = mysqli_query($this->conn, $this->sql);
            while ($row = mysqli_fetch_array($this->result))
                array_push($this->data, $row);
            
            return $this->data;
            
        } catch (Exception $er) {
            echo (" (model_class.php) GET error, query ($this->sql): " . $er->getMessage());

        }
        
    }

    // Method get
    public function getColumn () {

        try {
            $this->sql = $this->select . " ";
            $this->sql .= $this->join  . " ";
            $this->sql .= $this->where . " ";
            $this->sql .= $this->order . " ";
            $this->sql .= $this->limit;

            $this->result = mysqli_query($this->conn, $this->sql);            
            return mysqli_fetch_array($this->result);
            
        } catch (Exception $er) {
            echo (" (model_class.php) GET error, query ($this->sql): " . $er->getMessage());

        }
        
    }

    // Method setData
    public function set ($dataIn) {

        try {
            $this->setData = " SET " . implode($dataIn, ", ");
            return $this;

        } catch (Exception $er) {
            echo (" (model_class.php) Proses set data bermasalah: " . $er->getMessage());

        }

    }

    // Method find
    public function find ($key, $val) {

        try {
            $this->where = " WHERE $key=$val";
            return $this;

        } catch (Exception $er) {
            echo (" (model_class.php) Proses find bermasalah: " . $er->getMessage());
        }

    }

    // Method insert
    public function insert () {

        try {
            $this->sql = "INSERT INTO " . $this->table . $this->setData;
            mysqli_query($this->conn, $this->sql);

        } catch (Exception $er) {
            echo (" (model_class.php) INSERT error, query ($this->sql): " . $er->getMessage());

        }

    }

    // Method update
    public function update () {

        try {
            $this->sql = "UPDATE " . $this->table . $this->setData . $this->where;
            mysqli_query($this->conn, $this->sql);

        } catch (Exception $er) {
            echo (" (model_class.php) Tidak bisa menjalankan query ($this->sql): " . $er->getMessage());

        }

    }

    // Method delete
    public function delete () {

        try {
            $this->sql = "DELETE FROM " . $this->table . $this->where;
            mysqli_query($this->conn, $this->sql);

        } catch (Exception $er) {
            echo (" (model_class.php) DELETE error, query ($this->sql): " . $er->getMessage());
        }

    }

}

?>