<?php

/**
 * @package    Facebook_Fetch_Images_Crop
 * @author     Stephen Kempin <info@stephenkempin.co.uk>
 **/

    // require crop function
    require_once('crop_function/crop.php');

    // create empty arrays
    $facebook = [];
    $image_crop = [];


    // Facebook Settings
    $facebook['access_token'] = 'hhg'; // FB access token
    $facebook['album_id'] = 't'; // set FB album ID (as seen www.facebook.com/*********)
    $facebook['image_limit'] = 12;
    
    
    // Image Crop Settings
    $image_crop['crop_width'] = 400; // pixel width
    $image_crop['crop_height'] = 200; // pixel height
    $image_crop['quality'] = 100; // image percentage quality
    $image_crop['destination_path'] = "images/"; // set destination folder
    
    // ======================================================================================

    // error handling
    require_once('error_handling.php');

    // require fetch images
    require_once('fetch_images.php');
    
?>