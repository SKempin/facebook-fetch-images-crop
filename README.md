# Facebook Fetch Images Crop
Fetch image uploads from any public Facebook photo album (via the Facebook Graph API), crop to specified sizes and save to a server directory. Images are cropped from the center outwards.

## Requirements
- PHP 5.2
- Facebook Graph API access token 
- Server write permissions for the `save_directory`
 

## Setup

Facebook settings:

	'access_token'  => ''       // (string) Valid Facebook access token
	'album_id'      => ''       // (string) Facebook album ID (as seen www.facebook.com/*********)
	'image_limit'   => 8        // (integer) Number of image uploads to fetch

Image crop and save settings:

    'crop_width'        => 250          // (integer) Cropped image width in pixels
    'crop_height'       => 250          // (integer) Cropped image height in pixels
    'quality'           => 80           // (integer) 0-100 image percentage quality
    'save_directory'    => "images/"    // (string)  Save directory
    

## Usage
Make a HTTP request to settings.php to execute the script. Images will be saved to your server at the location set in `save_directory` (default is the `/images` folder). Cron job a HTTP request for automatic image generations. 