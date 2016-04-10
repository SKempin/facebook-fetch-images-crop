<?php

/**
 * @package    Facebook_Fetch_Images_Crop
 * @author     Stephen Kempin <info@stephenkempin.co.uk>
 **/

    // require crop function
    require_once('crop_function/crop.php');
    
    
    // Facebook Settings
    $facebook = array(
        'access_token'  => '',              // (string) Facebook Page Access Token
        'album_id'      => '',              // (string) Facebook album ID (as seen www.facebook.com/*********)
        'image_limit'   => 8                // (integer) Number of image uploads to fetch
    );
    
    
    // Image Crop Settings
    $image_crop = array(
        'crop_width'        => 250,         // (integer) Cropped image width in pixels
        'crop_height'       => 250,         // (integer) Cropped image height in pixels
        'quality'           => 80,          // (integer) 0-100 image percentage quality
        'save_directory'    => "images/",   // (string)  Save directory
        'image_prefix'      => "facebook",      // (string)  Prefix before numeral 
    );

    
    // =======================================================================================================


    // error handling
    require_once('error_handling.php');

    // require fetch images
    require_once('fetch_images.php');
    
?>