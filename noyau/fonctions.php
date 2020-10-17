<?php
/*

    ./noyau/fonctions.php

*/
namespace Noyau\Fonctions;

/**
 * [strCut description]
 * @param  [type]  $string [description]
 * @param  integer $max    [description]
 * @param  string  $end    [description]
 * @return string          [description]
 */
function strCut($string, $max = 150, $end = '...') :string {
  if (strlen($string) > $max) {
      $string = substr($string, 0, $max - strlen($end)).$end;
  }
  return $string;
}

/**
 * [formater_date description]
 * @param  string $date   [description]
 * @param  [type] $format [description]
 * @return string         [description]
 */
function formater_date(string $date, string $format = DATE_POSTS_INDEX) :string {
  return date_format(date_create($date), $format);
}

/**
 * [slugify description]
 * @param  string $str [description]
 * @return string      [description]
 */
function slugify(string $str) :string {
   return trim(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), strtolower($str)), '-');
 }
