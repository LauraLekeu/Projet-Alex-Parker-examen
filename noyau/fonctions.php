<?php
/*

    ./noyau/fonctions.php

*/


namespace Noyau\Fonctions;


function strCut($string, $max = 150, $end = '...') {
  if (strlen($string) > $max) {
      $string = substr($string, 0, $max - strlen($end)).$end;
  }
  return $string;
}


// Fonction pour formater les dates (ex: Wed 02 Sep 2020) Y m d
function formater_date(string $date, string $format = DATE_POSTS_INDEX) :string {
  return date_format(date_create($date), $format);
}


// Fonction pour slugifier
function slugify(string $str) {
   return trim(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), strtolower($str)), '-');
 }
