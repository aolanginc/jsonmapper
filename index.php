<?php
require_once "vendor/autoload.php";
use JsonMapper\JsonMapper;
use JsonMapper\ContactClassInterface;

class Contact
{
    /**
     * Full name
     * @var string
     */
    public $name;

    /**
     * @var BAddress
     */
    public $address;
}

class BAddress{

    public $street;

}

class CAddress extends BAddress
{
    public static function propertySpecificity(){

        //return self::CITY;

    }

}

class Address extends BAddress implements ContactClassInterface
{
    const CITY = "city";

    public $city;

    public function getGeoCoords()
    {
        //do something with $street and $city
    }

    public static function propertySpecificity(){

        //return self::CITY;

    }
}

$json = json_decode(file_get_contents('json.json'));
$mapper = new JsonMapper();

$mapper->setDeclaredClasses(get_declared_classes());

$contact = $mapper->map($json, new Contact());

var_dump($contact);