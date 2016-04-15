<?php
    
namespace App\Http\Utilities;
    
class County {
    
    
       
    public static function all()
    {
        $counties = ["Butte-Silver Bow", "Flathead", "Gallatin", "Missoula", "Ravalli", "Yellowstone", "Cascade", "Fergus", "Lewis and Clark", "State of Montana" ];
        
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
                $contact['name']   = "Sgt. Nick Salois";
                $contact['number'] = "";
                $contact['email']  = "nsalois@flathead.mt.gov";
                break;
            case "Butte-Silver Bow":
                $contact['name']   = "Lt. Jeffery Williams";
                $contact['number'] = "";
                $contact['email']  = "jjwilliams@bsb.mt.gov";
                break;
            case "Yellowstone":
                $contact['name']   = "Del Kuntz";
                $contact['number'] = "";
                $contact['email']  = "kuntzd@ci.billings.mt.us";
                break;
            case "Missoula":
                $contact['name']   = "Officer Ben Slater";
                $contact['number'] = "";
                $contact['email']  = "bslater@ci.missoula.mt.us";
                break;
            case "Ravalli":
                $contact['name']   = "Deputy Dan Mendonca";
                $contact['number'] = "";
                $contact['email']  = "dmendonca@rc.mt.gov";
                break;
            case "Cascade":
                $contact['name']   = "Bob Rosipal";
                $contact['number'] = "";
                $contact['email']  = "brosipal@cascadecountymt.gov";
                break;
            case "Fergus":
                $contact['name']   = "Jim Anderson";
                $contact['number'] = "";
                $contact['email']  = "Jim.Anderson@gallatin.mt.gov";
                break;
            case "Lewis and Clark":
                $contact['name']   = "Sgt. Shane Hildenstab";
                $contact['number'] = "";
                $contact['email']  = "shildenstab@lccountymt.gov";
                break;
            case "State of Montana":
                $contact['name']   = "Jim Anderson";
                $contact['number'] = "";
                $contact['email']  = "Jim.Anderson@gallatin.mt.gov";
                break;
        }
        
        return $contact;
    }
    
    public static function getMentalHealthContact($county)
    {
        switch ($county) {
            case "Gallatin":
                $contact['name']   = "Shannon Marroney, LCSW";
                $contact['number'] = "";
                $contact['email']  = "smaroney@wmmhc.org";
                break;
            case "Flathead":
                $contact['name']   = "Annette Darkenwald, LCSW";
                $contact['number'] = "";
                $contact['email']  = "adarkenwal@wmmhc.org";
                break;
            case "Butte-Silver Bow":
                $contact['name']   = "Lyn Ankelman, LCPC";
                $contact['number'] = "";
                $contact['email']  = "lankelman@wmmhc.org";
                break;
            case "Yellowstone":
                $contact['name']   = "Marcee Farrar-Neary, LCPC";
                $contact['number'] = "";
                $contact['email']  = "mfarrarneary@billingsclinic.org";
                break;
            case "Missoula":
                $contact['name']   = "Theresa Williams, LCSW";
                $contact['number'] = "";
                $contact['email']  = "twilliams@wmmhc.org";
                break;
            case "Ravalli":
                $contact['name']   = "Kimber Smith, LCSW";
                $contact['number'] = "";
                $contact['email']  = "kismith@wmmhc.org";
                break;
            case "Cascade":
                $contact['name']   = "Not Available";
                $contact['number'] = "";
                $contact['email']  = "";
                break;
            case "Fergus":
                $contact['name']   = "Not Available";
                $contact['number'] = "";
                $contact['email']  = "";
                break;
            case "Lewis and Clark":
                $contact['name']   = "Jadin Van Steenvort, LCSW";
                $contact['number'] = "";
                $contact['email']  = "jadinvan@gmail.com";
                break;
            case "State of Montana":
                $contact['name']   = "Ingrid Hill";
                $contact['number'] = "";
                $contact['email']  = "ingridhill.cit@gmail.com";
                break;
        }
        
        return $contact;
    }
    
    public static function getNextAcademy($county)
    {
        switch ($county) {
            case "Gallatin":
                $academy['location'] = "Bozeman";
                $academy['date']     = "Feb. 13-17, 2017";
                break;
            case "Flathead":
                $academy['location'] = "Kalispell";
                $academy['date']     = "Oct. 3-7, 2016";
                break;
            case "Butte-Silver Bow":
                $academy['location'] = "Butte";
                $academy['date']     = "Jan. 9-13, 2017";
                break;
            case "Yellowstone":
                $academy['location'] = "Billings";
                $academy['date']     = "Sept. 19-23, 2016";
                break;
            case "Missoula":
                $academy['location'] = "Missoula";
                $academy['date']     = "April 10-14, 2017";
                break;
            case "Ravalli":
                $academy['location'] = "Hamilton";
                $academy['date']     = "May 16-20, 2016";
                break;
            case "Cascade":
                $academy['location'] = "TBD";
                $academy['date']     = "TBD";
                break;
            case "Fergus":
                $academy['location'] = "TBD";
                $academy['date']     = "TBD";
                break;
            case "Lewis and Clark":
                $academy['location'] = "Helena";
                $academy['date']     = "March 20-24, 2017";
                break;
            case "State of Montana":
                $academy['location'] = "";
                $academy['date']     = "";
                break;
                
                
        }
        
        return $academy;
    }
}