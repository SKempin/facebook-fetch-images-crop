# Facebook_Fetch_Images_Crop
Fetch image uploads from any public Facebook photo album (via the Facebook Graph API), crop to specified sizes and save to a server directory. Images are cropped from the center outwards.

## Requirements
* Facebook Graph API access token 
* Server write permissions for your `destination_path` directory
 

## Setup

Facebook settings:

	$facebook['access_token'] = ''      // (string) Valid Facebook access token
	$facebook['album_id'] =  ''         // (string) Facebook album ID (as seen www.facebook.com/*********)
	$facebook['image_limit'] = 12       // (integer) Number of image uploads to fetch

Image crop and save settings:

    $image_crop['crop_width'] = 400;                // (integer) Cropped image width in pixels
    $image_crop['crop_height'] = 200;               // (integer) Cropped image height in pixels
    $image_crop['quality'] = 100;                   // (integer) 0-100 image percentage quality
    $image_crop['destination_path'] = "images/";    // (string)  Save directory
    

## Usage
Make a HTTP request to settings.php to execute the script. Images will be saved to your server at the location set in `destination_path` (default is the `/images` folder). Cron job a HTTP request for automatic image generations. 