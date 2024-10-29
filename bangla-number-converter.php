<?php
/*
Plugin Name:        Bangla Number Converter
Plugin URI:         https://wordpress.org/plugins/bangla-number-converter/
Description:        Converts English numbers to Bangla numbers.
Version:            1.1
Requires at least:  5.7 
Requires PHP:       7.4
Author:             Jesmin Juthi
Author URI:         https://linktr.ee/jesminjuthi
License:            GPL v2 or later
License URI:        https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:        bnconverter
*/

function bnconverter_eng_to_bangla($str) {
  $eng = array('0','1','2','3','4','5','6','7','8','9');
  $bang = array('০','১','২','৩','৪','৫','৬','৭','৮','৯');
  return str_replace($eng, $bang, $str);
}

function bnconverter_month_long_to_bangla($str) {
  $eng = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
  $bang = array('জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর');
  return str_replace($eng, $bang, $str);
}

function bnconverter_month_to_bangla($str) {
  $eng = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
  $bang = array('জান', 'ফেব', 'মার্চ', 'এপ্রি', 'মে', 'জুন', 'জুল', 'অগ', 'সেপ', 'অক্ট', 'নভ', 'ডিস');
  return str_replace($eng, $bang, $str);
}



function bnconverter_bangla_number_converter($output) {
  $output = bnconverter_eng_to_bangla($output);
  $output = bnconverter_month_long_to_bangla($output);
  $output = bnconverter_month_to_bangla($output);
  return $output;
}

add_filter('the_time', 'bnconverter_bangla_number_converter');
add_filter('the_date', 'bnconverter_bangla_number_converter');
add_filter('get_the_date', 'bnconverter_bangla_number_converter');
add_filter('get_the_time', 'bnconverter_bangla_number_converter');
add_filter('date_i18n', 'bnconverter_bangla_number_converter');
add_filter('number_format_i18n', 'bnconverter_bangla_number_converter');
add_filter('get_comments_number_text', 'bnconverter_bangla_number_converter');
add_filter('get_comment_date', 'bnconverter_bangla_number_converter');
add_filter('comments_number', 'bnconverter_bangla_number_converter');
add_filter('get_comment_time', 'bnconverter_bangla_number_converter');
add_filter('paginate_links', 'bnconverter_bangla_number_converter');
add_filter('get_calendar', 'bnconverter_bangla_number_converter');
add_filter('month_link', 'bnconverter_bangla_number_converter');
add_filter('day_link', 'bnconverter_bangla_number_converter');
add_filter('post_views_count', 'bnconverter_bangla_number_converter');
add_filter('widget_text', 'bnconverter_bangla_number_converter');

?>