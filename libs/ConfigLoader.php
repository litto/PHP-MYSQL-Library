<?php
/*
 * @category  Database Access
 * @package   MysqlLib
 * @author    Litto chacko <littochackomp@gmail.com>
 * @copyright Copyright (c) 2010-2016
 * @link      https://phpdudes.blogspot.in
 * @version   1.8-master
 */
	
	class ConfigLoader
	{
		private $configData;
		private $configPath;
		
		function __construct($path)
		{			
			$this->configPath	=	$path;
			$this->configData	=	array();

		}
		
		/* 
		 *  Get The config data
		*/
		
		function getConfig($string)
		{			
			try{
					$content	=	parse_ini_file($this->configPath,true);		
					$this->configData	=	$content[$string];					
			}catch(Exception $c){
							
			}
			return $this->configData;
		}
		
	}



?>