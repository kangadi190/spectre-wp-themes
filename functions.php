<?php
/**
 * Fungsi Memuat Tema
 * 
 * @package Spectre Theme
 * @auhor   Adiboo Creatuve Karya Mandiri
 * @since   1.0.0-Rebuild.20190125 
 */

 foreach(glob(__DIR__ . '/system/*.php') as $files) {
    require($files);
 }