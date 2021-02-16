<?php


namespace Core\Table;



use Core\Database\Database;

class Table{
    protected $table;
    protected $db;

    /**
     * Table constructor.
     * @param Database $db
     */
    public function __construct(Database $db){
        $this->db = $db;
        if(is_null($this->table)){
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name));
        }
    }

    /**
     * @return mixed
     */
    public function all(){

        return $this->query('SELECT * FROM ' . $this->table);

    }

    /**
     * @return mixed
     */
    public function total(){
        return $this->query('SELECT COUNT(*) as total FROM ' . $this->table);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id){
        return $this->query("
            SELECT *
            FROM {$this->table}
            WHERE id = ?
        ", [$id], true);
    }

    /**
     * @param $name
     * @return mixed
     */
    public function findWithName($name){
        return $this->query("
            SELECT *
            FROM {$this->table}
            WHERE username = ?
        ", [$name], true);
    }

    /**
     * @param $id
     * @param $fields
     * @return mixed
     */
    public function update($id, $fields){
        $sql_parts = [];
        $attributes = [];

        foreach ($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $attributes[] = $id;
        $sql_part = implode(', ', $sql_parts);
        return $this->query("UPDATE {$this->table} SET $sql_part WHERE id = ?", $attributes, true);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id){
        return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id], true);
    }

    /**
     * @param $fields
     * @return mixed
     */
    public function create($fields){
        $sql_parts = [];
        $attributes = [];

        foreach ($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $sql_part = implode(', ', $sql_parts);
        return $this->query("INSERT INTO {$this->table} SET $sql_part", $attributes, true);
    }

    /**
     * @param $key
     * @param $value
     * @return array
     */
    public function extractList($key, $value){
        $records = $this->all();
        $return = [];
        foreach ($records as $v) {
            $return[$v->$key] = $v->$value;
        }
        return $return;
    }

    /**
     * @param $statement
     * @param null $attributes
     * @param false $one
     * @return mixed
     */
    public function query($statement, $attributes = null, $one = false ){
        if($attributes){
            return $this->db->prepare(
                $statement,
                $attributes,
                str_replace(
                    'Table',
                    'Entity',
                    get_class($this)
                ),
                $one
            );
        }else{
            return $this->db->query(
                $statement,
                str_replace(
                    'Table',
                    'Entity',
                    get_class($this)
                ),
                $one
            );
        }
    }
}