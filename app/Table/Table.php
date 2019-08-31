<?php
/**
 * Created by PhpStorm.
 * User: nassi
 * Date: 31/08/2019
 * Time: 18:28
 */
namespace App\Table;
class Table
{
    protected $table;

    public function __construct(){
        if(is_null($this->table)){
            $parts = explode('\\',get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table','',$class_name));
        }

    }
}