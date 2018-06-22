<?php
/**
 * Created by PhpStorm.
 * User: maxsarandev
 * Date: 22/06/2018
 * Time: 21:16
 */

class Company
{
    private $id;
    private $name;
    private $warehouse_id;

    public function __construct($id, $name, $warehouse_id){
        $this->id = $id;
        $this->name = $name;
        $this->warehouse_id = $warehouse_id;
    }
}