<?php
    
namespace App\Http\Utilities;
    
class County {
    
    
       
    public static function all()
    {
        $counties = ["State of Montana", "Butte-Silver Bow", "Flathead", "Gallatin", "Missoula", "Ravalli", "Yellowstone", "Cascade", "Fergus", "Lewis and Clark", "Park", "South Madison", "North Madison", "Jefferson", "Powell", "Broadwater", "Meagher", "North Jefferson", "Granite", "Mineral", "Lake", "Sanders", "Lincoln", "Teton", "Chouteau", "Pondera", "Toole", "Glacier", "Wheatland", "Judith Basin", "Petroleum", "Big Horn", "Carbon", "Stillwater", "Sweet Grass", "Golden Valley" "Musselshell", "Treasure", "Custer", "Rosebud", "Powder River", "Carter", "Fallen", "Prairie", "Hill", "Liberty", "Blaine", "Phillips", "Dawson", "McCone", "Valley", "Daniels", "Sheridan", "Roosevelt", "Richland", "Wibaux" ];
        
        return $counties;
    }
    
    public static function getLawEnforcementContact($county)
    {
        switch ($county) {
            case "Gallatin":
                $contact['name']   = "Jim Anderson";
                $contact['number'] = "";
                $contact['email']  = "Jim.Anderson@gallatin.mt.gov";
                break;
            case "Flathead":
            case "Lake":
            case "Sanders":
            case "Lincoln":
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
            case "Big Horn":
            case "Carbon":
            case "Stillwater":
            case "Sweet Grass":
            case "Golden Valley":
            case "Musselshell":
            case "Treasure":
                $contact['name']   = "Del Kuntz";
                $contact['number'] = "";
                $contact['email']  = "kuntzd@ci.billings.mt.us";
                break;
            case "Missoula":
            case "Granite":
            case "Mineral":
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
            case "Teton":
            case "Chouteau":
            case "Pondera":
            case "Toole":
            case "Glacier":
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
            case "Park":
            case "South Madison":
            case "Wheatland":
            case "Judith Basin":
            case "Petroleum":
            case "Custer":
            case "Rosebud":
            case "Powder River":
            case "Carter":
            case "Fallen":
            case "Prairie":
            case "Hill":
            case "Liberty":
            case "Blaine":
            case "Phillips":
            case "Dawson":
            case "McCone":
            case "Valley":
            case "Daniels":
            case "Sheridan":
            case "Roosevelt":
            case "Richland":
            case "Wibaux":
                $contact['name']   = "Jim Anderson";
                $contact['number'] = "";
                $contact['email']  = "Jim.Anderson@gallatin.mt.gov";
                break;
            case "South Jefferson":
            case "North Madison":
            case "Powell":
                $contact['name']   = "Lt. Jeffery Williams";
                $contact['number'] = "";
                $contact['email']  = "jjwilliams@bsb.mt.gov";
                break;
            case "Broadwater":
            case "Meagher":
            case "North Jefferson":
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
            case "Lake":
            case "Sanders":
            case "Lincoln":
                $contact['name']   = "Annette Darkenwald, LCSW";
                $contact['number'] = "";
                $contact['email']  = "adarkenwal@wmmhc.org";
                break;
            case "Butte-Silver Bow":
            case "South Jefferson":
            case "North Madison":
            case "Powell":
                $contact['name']   = "Lyn Ankelman, LCPC";
                $contact['number'] = "";
                $contact['email']  = "lankelman@wmmhc.org";
                break;
            case "Yellowstone":
            case "Big Horn":
            case "Carbon":
            case "Stillwater":
            case "Sweet Grass":
            case "Golden Valley":
            case "Musselshell":
            case "Treasure":
                $contact['name']   = "Marcee Farrar-Neary, LCPC";
                $contact['number'] = "";
                $contact['email']  = "mfarrarneary@billingsclinic.org";
                break;
            case "Missoula":
            case "Granite":
            case "Mineral":
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
            case "Fergus":
            case "Teton":
            case "Chouteau":
            case "Pondera":
            case "Toole":
            case "Glacier":
            case "Park":
            case "South Madison":
            case "Wheatland":
            case "Judith Basin":
            case "Petroleum":
            case "Custer":
            case "Rosebud":
            case "Powder River":
            case "Carter":
            case "Fallen":
            case "Prairie":
            case "Hill":
            case "Liberty":
            case "Blaine":
            case "Phillips":
            case "Dawson":
            case "McCone":
            case "Valley":
            case "Daniels":
            case "Sheridan":
            case "Roosevelt":
            case "Richland":
            case "Wibaux":
                $contact['name']   = "Not Available";
                $contact['number'] = "";
                $contact['email']  = "";
                break;
            case "Lewis and Clark":
            case "Meagher":
            case "North Jefferson":
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
                $academy['date']     = "";
                break;
            case "Fergus":
                $academy['location'] = "TBD";
                $academy['date']     = "";
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