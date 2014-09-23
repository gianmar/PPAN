<?php
global $formheader;
$formheader='default';
get_header(); 
 
if(is_home()) {
  get_template_part( 'pages/page-home'); 	
} else {
  get_template_part( 'content-page');
}
 
get_footer(); 
