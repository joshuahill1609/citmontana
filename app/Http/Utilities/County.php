<?php
    
namespace App\Http\Utilities;
    
class County {
    
    
       
    public static function all()
    {
        $counties = ["Butte-Silver Bow", "Flathead", "Gallatin", "Missoula", "Ravalli", "Yellowstone" ];
        
        return $counties;
    }
    
    public static function getLawEnforcementContact($county)
    {
        switch ($county) {
            case "Gallatin":
                $contact['name']   = "Jim Anderson";
                $contact['number'] = "406.580.2543";
                $contact['email']  = "Jim.Anderson@gallatin.mt.gov";
                break;
            case "Flathead":
                $contact['name']   = "Jim Anderson";
                $contact['number'] = "406.580.2543";
                $contact['email']  = "Jim.Anderson@gallatin.mt.gov";
                break;
            case "Butte-Silver Bow":
                $contact['name']   = "Jim Anderson";
                $contact['number'] = "406.580.2543";
                $contact['email']  = "Jim.Anderson@gallatin.mt.gov";
                break;
            case "Yellowstone":
                $contact['name']   = "Jim Anderson";
                $contact['number'] = "406.580.2543";
                $contact['email']  = "Jim.Anderson@gallatin.mt.gov";
                break;
            case "Missoula":
                $contact['name']   = "Jim Anderson";
                $contact['number'] = "406.580.2543";
                $contact['email']  = "Jim.Anderson@gallatin.mt.gov";
                break;
            case "Ravalli":
                $contact['name']   = "Jim Anderson";
                $contact['number'] = "406.580.2543";
                $contact['email']  = "Jim.Anderson@gallatin.mt.gov";
                break;
        }
        
        return $contact;
    }
    
    public static function getMentalHealthContact($county)
    {
        switch ($county) {
            case "Gallatin":
                $contact['name']   = "Not Available";
                $contact['number'] = "";
                $contact['email']  = "";
                break;
            case "Flathead":
                $contact['name']   = "Not Available";
                $contact['number'] = "";
                $contact['email']  = "";
                break;
            case "Butte-Silver Bow":
                $contact['name']   = "Not Available";
                $contact['number'] = "";
                $contact['email']  = "";
                break;
            case "Yellowstone":
                $contact['name']   = "Not Available";
                $contact['number'] = "";
                $contact['email']  = "";
                break;
            case "Missoula":
                $contact['name']   = "Not Available";
                $contact['number'] = "";
                $contact['email']  = "";
                break;
            case "Ravalli":
                $contact['name']   = "Not Available";
                $contact['number'] = "";
                $contact['email']  = "";
                break;
        }
        
        return $contact;
    }
    
    public static function getNextAcademy($county)
    {
        switch ($county) {
            case "Gallatin":
                $academy['location'] = "Bozeman";
                $academy['date']     = "Feb. 13-17, 2016";
                break;
            case "Flathead":
                $academy['location'] = "Kalispell";
                $academy['date']     = "Oct. 3-7, 2016";
                break;
            case "Butte-Silver Bow":
                $academy['location'] = "Butte";
                $academy['date']     = "Jan. 9-13, 2016";
                break;
            case "Yellowstone":
                $academy['location'] = "Billings";
                $academy['date']     = "Sept. 19-23, 2016";
                break;
            case "Missoula":
                $academy['location'] = "Missoula";
                $academy['date']     = "April 11-15, 2016";
                break;
            case "Ravalli":
                $academy['location'] = "Hamilton";
                $academy['date']     = "May TBD, 2016";
                break;
        }
        
        return $academy;
    }
}