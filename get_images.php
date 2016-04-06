<?php

    // require crop function
    require_once('crop_function/crop.php');

    // create arrays
    $facebook = [];
    $image_crop = [];


    // Facebook Settings
    $facebook['access_token'] = ''; // FB access token
    $facebook['album_id'] = '507046695999370'; // set FB album ID (as seen www.facebook.com/*********)
    $facebook['image_limit'] = 12;
    
    
    // Image Crop Settings
    $image_crop['crop_width'] = 400; // pixel width
    $image_crop['crop_height'] = 200; // pixel height
    $image_crop['quality'] = 100; // image percentage quality
    $image_crop['destination_path'] = "images/"; // set destination folder
    
    // ======================================================================================
    
    
    $url = "https://graph.facebook.com/{$facebook['album_id']}/photos?fields=images&limit={$facebook['image_limit']}&access_token={$facebook['access_token']}";
    $image = json_decode(file_get_contents($url)); // decode JSON
   
    $newImage = 0; // set to 0

    foreach($image->data as $img) {

        foreach($img->images as $currentImage) {

                $imgSourceURL = $currentImage->source;
                $newImage++; //increment
                resize_crop_image($image_crop['crop_width'], $image_crop['crop_height'], $imgSourceURL, "{$image_crop['destination_path']}/facebook_{$newImage}.jpg", $image_crop['quality']); // set crop size
                break; // break loop after image limit
        }

    }

?>