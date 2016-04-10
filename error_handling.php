<?php

/**
 * @package    Facebook_Fetch_Images_Crop
 * @author     Stephen Kempin <info@stephenkempin.co.uk>
 **/

    /* Kill script if no access token or album ID entered */
    
    // die if no Facebook access token
    if (empty($facebook['access_token'])) {
      die("Empty Facebook access token");
    };

    // die if no Facebook album ID
    if (empty($facebook['album_id'])) {
      die("Empty Facebook album ID.");
    };

?>