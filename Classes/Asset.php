<?php
/**
 * Created by PhpStorm.
 * User: maxsarandev
 * Date: 22/06/2018
 * Time: 21:20
 */

class Asset
{
    private $id;
    private $name;
    private $quantity;
    private $warehouse_id;

    public function __construct($id, $name, $quantity, $warehouse_id){
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->warehouse_id = $warehouse_id;
    }
}