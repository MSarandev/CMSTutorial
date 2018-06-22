<?php
/**
 * Created by PhpStorm.
 * User: maxsarandev
 * Date: 22/06/2018
 * Time: 20:47
 */

class Warehouse
{
    // define the properties
    private $id;
    private $name;
    private $company_id;
    private $location_id;
    private $asset_ids = array();

    // define the construct

    /**
     * Warehouse constructor.
     * @param $id
     * @param $name
     * @param $company_id
     * @param $location_id
     * @param $asset_id
     */
    function __construct($id, $name, $company_id, $location_id, $asset_id)
    {
        // Assign the properties from the params
        $this->id = $id;
        $this->name = $name;
        $this->company_id = $company_id;
        $this->location_id = $location_id;
        // loop and add all values
        foreach ($asset_id as $item){
            $this->asset_ids[] = $item;
        }
    }

    // Get parent company
    function getCompany(){
        return $this->company_id;
    }

    // Get location
    function getLocation(){
        return $this->location_id;
    }
}