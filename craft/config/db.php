<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(
  '*' => array(
    'tablePrefix' => 'craft',
  ),
  'LOCAL' => array(
    'server' => 'localhost',
    'user' => 'root',
    'password' => 'root',
    'database' => 'db_qca',
  ),
  'STAGING' => array(
    'server' => 'localhost',
    'user' => '',
    'password' => '',
    'database' => '',
  ),
  'PRODUCTION' => array(
    'server' => 'localhost',
    'user' => '',
    'password' => '',
    'database' => '',
  ),
);