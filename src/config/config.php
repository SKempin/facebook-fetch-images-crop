<?php

/**
 * @package    Facebook_Fetch_Images_Crop
 * @author     Stephen Kempin <info@stephenkempin.co.uk>
 **/

    // require crop function
    require_once('./crop_function/crop.php');
    
    
    // Facebook Settings
    $facebook = array(
        'access_token'  => '',              // (string)  Facebook Page Access Token
        'album_id'      => '',              // (string)  Facebook Album ID (e.g. https://www.facebook.com/media/set/?set=a.[ **ALBUM ID IS THIS NUMBER** ].90967.383141721750246&type=3)
        'image_limit'   => 6                // (integer) Number of image uploads to fetch
    );
    
    
    // Image Crop Settings
    $image_crop = array(
        'crop_width'        => 350,         // (integer) Cropped image width in pixels
        'crop_height'       => 350,         // (integer) Cropped image height in pixels
        'quality'           => 85,          // (integer) 0-100 image percentage quality
        'save_directory'    => "images/",   // (string)  Save directory
        'image_prefix'      => "facebook"   // (string)  Prefix before numeral 
    );

    
    // =======================================================================================================

    // validate Facebook variables
    require_once('validate.php');

?>