<?php
/**
* Albums Parser made by Vladyslav Gaysyuk <mr.mikield@gmail.com>
* Get Last 20 albums and store their info in database.
* Just add this file to cron for example for each 12h.
*
* Check it out :)
* My code also works with PHP7 version ^_^
*/

#declare(strict_types=1); #Enable PHP7

#Including needed files.
include 'vendor/autoload.php';
use PHPHtmlParser\Dom;

#Default URL to parse
$url = 'http://watchthedeer.com/photos.aspx';

#How much albums to get
$albumsGetCount = 20;

#Creating the DOM and getting last 20 albums
$html = new Dom;
$siteInnerHtml = $html->load($url);
$albums = $siteInnerHtml->getElementsbyTag('li')->toArray();
$albums = array_slice($albums, 0, $albumsGetCount);
#IF there are some albums
if (count($albums) >= 0) {
    
    //Adding DB instance
    $db = include 'DB.php';
    for ($i = 0; $i <= 20; $i++) {
        
        //$album = $albums[$i] ?? ''; #<--- Will work only in PHP7
        $album = (isset($albums[$i])) ? $albums[$i] : null; #This is for old version of PHP (PHP 5.6 f.e.)
        if (!is_null($album)) {
            
            //Write album info into database.
            $title = $album->find('a')->text; 
            $link = str_replace('/photos.aspx', '', $url).str_replace('..', '', $album->find('a')->getAttribute('href'));

			try{ 
				$db->insert('albums',[
				'title' => $title, 
				'link' => $link
				]);
			}catch(Exception $e){
				#Log the error
				#The title is unique, so we will have severals errors with unique values when inserting data.
			}
        }
    }
}
