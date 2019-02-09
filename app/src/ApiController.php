<?php

use SilverStripe\Control\Controller;
use SilverStripe\Control\Director;

class ApiController extends Controller{
    private static $allowed_actions = [
        "park"
    ];
	
    public function jobtype()
    {
        
        $parkObj = Park::get()->filter(["Approved" => 1]);
        
        $parkArray = array();
        
        if ($parkObj) {
            
            foreach ($parkObj as $parkitem) {
                $parkArray[] = parkitem;
            }
        }
        
        return json_encode($parkArray);
        
    }       
}
