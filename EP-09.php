<?php
//============================= intewrface segrigation ======================================
interface Vehicle{
    function Mileage();
    function Name();
    function Price();
}
interface OilPetrol{
    function getPetrol();
}
interface OilOcten{
    function getOcten();
}
interface TwoTyerPulasar extends Vehicle, OilPetrol{}
interface FourTyerTruck extends vehicle, OilOcten{}


class Puslsar implements TwoTyerPulasar{
    function Mileage(){}
    function Name(){}
    function Price(){}
    function getPetrol(){}
}
class Truck implements FourTyerTruck{
    function Mileage(){}
    function Name(){}
    function Price(){}
    function getOcten(){}
}