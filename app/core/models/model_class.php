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
        try {
            $this->conn = mysqli_connect($databaseConfig['host'], $databaseConfig['user'], $databaseConfig['pass'], $databaseConfig['db_name']);

        } catch (\Throwable $th) {
            die("Tidak bisa terkoneksi ke database: " . $th);

        } 

    }

    // Method select
    public function select ($column = '') {

        try {
            if (is_array($column))
                $tmp = implode($column, ", ");
            else
                $tmp = "*";
            
            $this->select .= "SELECT " . $tmp . " FROM " . $this->table;
            return $this;
            
        } catch (\Throwable $th) {
            die ("Proses select bermasalah: " . $th);

        }

    }

    // Method join
    public function join ($table, $param, $join = "JOIN") {

        try {
            if (is_array($table)) {
                for ($i = 0; $i < sizeof($table); $i++) {

                    $this->join .= " $join $table[$i] ";
                    $this->join .= " ON " . $table[$i] . "." . $param[$i][0] . "=" . $table[$i] . "." . $param[$i][1];

                }

            } else {
                $this->join .= " $join $table ";
                $this->join .= " ON " . $table . "." . $param;

            }

            return $this;

            
        } catch (\Throwable $th) {
            die ("Proses join bermasalah: " . $th);

        }

    }

    // Method where
    public function where ($rule = "") {

        try {
            $tmp = array();
            if (is_array($rule)) {
                foreach ($rule as $rl)
                    array_Push($tmp, $rl);
                
                $this->where .= "WHERE" . implode($tmp, " AND ");
                return $this;
            }
            else
                $this->where .+ "WHERE" . $rule;
                return $this;
                    
        } catch (\Throwable $th) {
            die ("Proses where bemasalah: " . $th);

        }

    }

    // Method order
    public function order ($column, $sort = "ASC") {
        $this->order .= "ORDER BY $column $sort";
        return $this;

    }

    // METHOD limit
    public function limit ($a, $b = 0) {

        try {
            $this->limit .= "LIMIT " . $a;
            if (!empty($a))
                $this->limit .= $b;
            
            return $this;

        } catch (\Throwable $th) {
            die ("Proses limit bermasalah: $th");

        }

    }

    // Method get
    public function get () {

        try {
            $this->sql .= $this->select . " ";
            $this->sql .= $this->join . " ";
            $this->sql .= $this->where . " ";
            $this->sql .= $this->order . " ";
            $this->sql .= $this->limit;

            $this->result = mysqli_query($this->conn, $this->sql);
            while ($row = mysqli_fetch_array($this->result))
                array_push($this->data, $row);
            
            return $this->data;
            
        } catch (\Throwable $th) {
            die ("Tidak bisa mengambil data dari table: " . $th);

        }
        
    }

    // Method setData
    public function set ($dataIn) {

        try {
            $this->setData .= " SET " . implode($dataIn, ", ");
            return $this;

        } catch (\Throwable $th) {
            die ("Proses set data bermasalah: " . $th);

        }

    }

    // Method find
    public function find ($key, $val) {

        try {
            $this->where .= " WHERE $key=$val";
            return $this;

        } catch (\Throwable $th) {
            die ("Proses find bermasalah: " . $th);
        }

    }

    // Method insert
    public function insert () {

        try {
            $this->sql = "INSERT INTO " . $this->table . $this->setData;
            mysqli_query($this->conn, $this->sql);

        } catch (\Throwable $th) {
            die ("Tidak bisa meng-Insert data dari table: " . $th);

        }

    }

    // Method update
    public function update () {

        try {
            $this->sql .= "UPDATE " . $this->table . $this->setData . $this->where;
            mysqli_query($this->conn, $this->sql);

        } catch (\Throwable $th) {
            die ("Tidak bisa mengubah data dari table: " . $th);

        }

    }

    // Method delete
    public function delete () {

        try {
            $this->sql .= "DELETE FROM " . $this->table . $this->where;
            mysqli_query($this->conn, $this->sql);

        } catch (\Throwable $th) {
            die ("Tidak bisa menghapus data dari table: " . $th);
        }

    }

}

?>