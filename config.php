<?php
require 'environment.php';
global $config;
$config=array();
if (ENVIRONMENT=='development') {
   $config['dbname'] = 'prime';
   $config['host']   = 'localhost';
   $config['dbuser'] = 'root';
   $config['dbpass'] = '';
} else {
   $config['dbname'] = 'apta';
   $config['host']   = 'localhost';
   $config['dbuser'] = 'root';
   $config['dbpass'] = '';
}