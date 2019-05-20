 <?php
/**
 * Created by HollamiCodes.
 * User: Hollami
 * Date: 8/6/2018
 * Time: 11:09 AM
 */
class Database
{
    var $_connection;
    var $show_error = true;

    private $_supportedFormats =['image/jpg,image/png,image/jpeg'];

    // Constructor Loads on Every Page an Instance Is Made.
    public function __construct()
    {
        $this->_connection = new mysqli("localhost", "root",
            "", "oop");

        // Error handling
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect to MySQL: " . mysql_connect_error(),
                E_USER_ERROR); 
        }
    }

    ///////////// Query Log /////////////////////////////////////////////////////////////////////////////////////
    ///
    public function select_all($columns, $table, $where = null, $limit = null, $order = null)
    {
        $where_clause = ($where) ? "WHERE $where" : '';
        $limit_clause = ($limit) ? "LIMIT $limit" : '';
        $order_clause = ($where) ? "ORDER  $order" : '';

        $query = "SELECT $columns FROM $table $where_clause $limit_clause $order_clause";

        $result = $this->_connection->query($query);

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } elseif ($this->show_error) {
            die($this->_connection->error);
        }
    }
    public function find_all($data){
        $sql="SELECT * FROM $data";
         $result = $this->_connection->query($sql);
        if ($result) {
            return $result->fetch_assoc();// returns an assoc. array
        } elseif ($this->show_error) {
            die($this->_connection->error);
        }
    }

    public function Select_by_id($table, $id)
    {

        $sql = "SELECT * FROM $table ";
        $sql .= "WHERE id='" . $this->_connection->escape_string($id) . "' ";

        // echo $sql;
        $result = $this->_connection->query($sql);
        if ($result) {
            return $result->fetch_assoc();// returns an assoc. array
        } elseif ($this->show_error) {
            die($this->_connection->error);
        }

    }

    public function insert($table, $coloumn1, $coloumn2, $coloumn3, $coloumn4, $coloumn5, $coloumn6)
    {

        $sql = "INSERT INTO $table ";
        $sql .= "(FullName, Username, Email, Password, Image, log) ";
        $sql .= "VALUES (";
        $sql .= "'" . $this->_connection->escape_string($coloumn1) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn2) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn3) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn4) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn5) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn6) . "'";
        $sql .= ")";
        $result = $this->_connection->query($sql);

    }

    public function select($data)
    {
        $array = array();
        $sql = " SELECT * FROM ".$data."";
        $result = $this->_connection->query($sql);

        while ($row = $result->fetch_assoc()) {
            $array[] = $row;
        }

        return $array;
    }

    public function select_where($table_name , $where_condition){
        $condition = '';
        $array = array();

        foreach ($where_condition as $key => $value){
            $condition .= $key . " = '".$value."' AND ";
        }
        $condition = substr($condition,0,-5);

        $sql = "SELECT * FROM ".$table_name."WHERE".$condition;

        $result = $this->_connection->query($sql);

        while ($row = fetch_array($result)){
            $array = $row ;
        }

        return $array;
    }
  
    public function update($table, $data, $where = null){
        $data = array_map([$this, 'prepare'], $data);

        $set_values = '';
        foreach ($data as $column => $value) {
            if($set_values != '') $set_values .= ', ';
            $set_values .= "$column = $value";
        }

        $where_clause = $where? "WHERE $where" : ''; 
        $query = "UPDATE $table SET $set_values $where_clause";
        $updated = $this->_connection->query($query);

        if($updated){
            return true;
        }elseif($this->show_error){
            die($this->_connection->error);
        }
    }

    public function delete($table, $where = null){
        $where_clause = $where? "WHERE $where" : '';
        echo $query = "DELETE FROM $table $where_clause";
        $deleted = $this->_connection->query($query);

        if($deleted){
            return true;
        }elseif($this->show_error){
            die($this->_connection->error);
        }
    }
    public function prepare($var){
        if(is_null($var)){
            return 'NULL';
        }else{
            $var = addslashes(trim($var));
            return "'$var'";
        }
    }
}