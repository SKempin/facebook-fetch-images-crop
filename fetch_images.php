 <?php
 
 /**
 * @package    Facebook_Fetch_Images_Crop
 * @author     Stephen Kempin <info@stephenkempin.co.uk>
 **/
 
    $url = "https://graph.facebook.com/{$facebook['album_id']}/photos?fields=images&limit={$facebook['image_limit']}&access_token={$facebook['access_token']}"; // Facebook Graph API call
    $image = json_decode(file_get_contents($url)); // decode JSON
   
    $newImage = 0; // set to 0

    foreach($image->data as $img) {

        foreach($img->images as $currentImage) {

                $imgSourceURL = $currentImage->source;
                $newImage++; //increment
                resize_crop_image($image_crop['crop_width'], $image_crop['crop_height'], $imgSourceURL, "{$image_crop['save_directory']}/{$image_crop['image_prefix']}{$newImage}.jpg", $image_crop['quality']); // set crop size, destination_path and quality
                break; // break loop after image limit
        }

    }
    
?>