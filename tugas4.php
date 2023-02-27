<?php
$kata ="kamu cantik";
$kata_balik = strrev($kata);
if ($kata == $kata_balik) {
  echo "$kata adalah palindrom.";
} else {
  echo "$kata bukan palindrom.";
}
?>