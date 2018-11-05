<?php
/**
 * Created by PhpStorm.
 * User: utaki
 * Date: 11/5/2018
 * Time: 11:40 AM
 */
 include_once _DIR_."Cat.php";
 include_once _DIR_."Dog.php";
 include_once _DIR_."Pigeon.php";
class AnimalFactory
{


    public function getAnimal($animal)
    {
        $result = null;

        switch ($animal) {
            case "dog":
                $result = new Dog();
                break;
            case "cat":
                $result = new Cat();
                break;
            case "pigeon":
                $result = new Pigeon();
                break;
        }
        return $result;
    }
}