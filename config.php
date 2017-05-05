<?php
require 'environment.php';
global $config;
$config=array();
if (ENVIRONMENT=='development') {
   $config['dbmaster'] = 'master';
   $config['dbname'] = 'gennex';
   $config['host']   = 'localhost';
   $config['dbuser'] = 'root';
   $config['dbpass'] = '';
} else {
   $config['dbmaster'] = 'master';
   $config['dbname'] = 'gennex';
   $config['host']   = 'localhost';
   $config['dbuser'] = 'root';
   $config['dbpass'] = '';
}