# Facebook Fetch Images Crop

[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://github.com/SKempin/facebook-fetch-images-crop/blob/master/LICENSE)
[![Maintenance](https://img.shields.io/badge/Maintained%3F-no-red.svg)](https://bitbucket.org/lbesson/ansi-colors)


Fetch image uploads from any Facebook Pages photo album (via the Graph API v2.5), crop to specified sizes and save to a server directory. Images are cropped from the center outwards.

## Requirements
- PHP >= 5.2
- [Facebook Graph 'Page Access Token'](https://developers.facebook.com/docs/pages/access-tokens)
- Server write permissions for the `save_directory`
 

## Setup

Facebook settings:

	'access_token'  => ''       // (string)  Facebook Page Access Token
	'album_id'      => ''       // (string)  Facebook album ID (e.g. https://www.facebook.com/media/set/?set=a.[ **ALBUM ID IS THIS NUMBER** ].90967.383141721750246&type=3)
	'image_limit'   => 8        // (integer) Number of image uploads to fetch

Image crop and save settings:

    'crop_width'        => 250          // (integer) Cropped image width in pixels
    'crop_height'       => 250          // (integer) Cropped image height in pixels
    'quality'           => 80           // (integer) 0-100 image percentage quality
    'save_directory'    => "images/"    // (string)  Save directory
    'image_prefix'      => ""           // (string)  Prefix before numeral 
    

## Usage
Make a HTTP request to fetch_images.php to execute the script. Images will be saved to your server at the location set in `save_directory` (default is the `/images` folder). Cron job a HTTP request for automatic image generations. 


## Author 
[Stephen Kempin](http://www.stephenkempin.co.uk)

## Licence
[MIT](https://github.com/SKempin/facebook-fetch-images-crop/blob/master/LICENSE)
