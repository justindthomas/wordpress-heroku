<?php
/*
Plugin Name: Amazon S3 Uploads
Plugin URI: http://code.google.com/p/asssu/
Author: Artem Titkov
Author URI: http://code.google.com/u/117859515361389646005/
Description: Moves your uploads to Amazon S3 via cron jobs.
Version: 1.08
*/

require_once dirname(__FILE__).'/asssu-models.php';
$asssu = new AsssuPlugin();
