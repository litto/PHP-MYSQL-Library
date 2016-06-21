<?php
ob_start();
session_start();
include("autoload.php");
$db     =   new MySql();
$db->connect(); 
/*
 * @category  Database Access
 * @package   MysqlLib
 * @author    Litto chacko <littochackomp@gmail.com>
 * @copyright Copyright (c) 2010-2016
 * @link      https://phpdudes.blogspot.in
 * @version   1.8-master
 */
?>