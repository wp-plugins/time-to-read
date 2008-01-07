<?php 

/* 
Plugin Name: Time To Read 
Description: Returns the number of words in the post, and the approximate time it'll take to read it. To implement, add <?php time_to_read(); ?> to your template. 
Version: 1.0 
Author: FekketCantenel 
Author URI: http://homework.never-ends.net/ 
Licensed under the The GNU General Public License 2.0 (GPL) http://www.gnu.org/licenses/gpl.html 
*/ 

function time_to_read() { 
   $wia = round(str_word_count(get_the_content()), -2); //Establishes the wordcount of the post, rounded to the nearest hundred (if anybody can tell me how to round to the nearest fifty, I'd be grateful!). 
   $minutes_low = ceil($wia / 200); //Figures out the lowest minute-count (for the fastest readers). Mess with the '200' to experiment, if you want to customize it. 
   $minutes_high = ceil($wia / 100); //Figures out the highest minute-count (for slow readers). Ditto for above. If you have very simple content, double these numbers. If you have very complicated content (lists, scientific information, complex advice), halve them. 200/100 is about average. 
   echo 'This article is about ' . $wia . ' words long, and will take about ' . $minutes_low . ' to ' . $minutes_high . ' minutes to read.'; 
   //Example output: "This article is about 900 words long, and will take about 5 to 9 minutes to read." 
} 

?>