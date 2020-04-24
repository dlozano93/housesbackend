<?php
namespace Rigo\Controller;

use Rigo\Types\Course;
use Rigo\Types\House;

class SampleController{
    
    public function getHomeData(){
        return [
            'name' => 'Rigoberto'
        ];
    }
    
    public function getDraftCourses(){
        $query = Course::all([ 'status' => 'draft' ]);
        return $query->posts;
    }
     public function getDraftHouses(){
        $query = House::all([ 'status' => 'draft' ]);
        $lst = [];
        forEach($query->posts as $x) {
            $lst[] = House::serialize($x);
        }
        return $lst;

        return $query->posts;
    }
    
}
?>