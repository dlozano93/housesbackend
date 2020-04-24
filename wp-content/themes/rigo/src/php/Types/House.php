<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class House extends BasePostType{
         public static function serialize($object){
        
        $arrayObject = (array) $object;
        $arrayObject['rooms'] = get_field( 'rooms', $object->ID );
        $arrayObject['baths'] = get_field( 'baths', $object->ID );
        $arrayObject['address'] = get_field( 'address', $object->ID );
        $arrayObject['price'] = get_field( 'price', $object->ID );
        $arrayObject['sell'] = get_field( 'sell', $object->ID );
        $arrayObject['image'] = get_field( 'image', $object->ID );
        $arrayObject['rent'] = get_field( 'rent', $object->ID );
        return $arrayObject;
    }}
    
    

?>