<?php

/* This file is part of Jeedom.
*
* Jeedom is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* Jeedom is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
*/

//require_once dirname(__FILE__) . '/../../../../core/php/core.inc.php';
/*
 * Non obligatoire mais peut être utilisé si vous voulez charger en même temps que votre
 * plugin des librairies externes (ne pas oublier d'adapter plugin_info/info.xml).
 * 
 * 
 */
global $ArduinoMODEpins,$Arduino328pins,$ArduinoMEGApins,$ArduinoESPanalogPins;
global $PifaceMODEpinsIN,$PifaceMODEpinsOUT,$Pifacepins;
global $PiGPIOpins,$PiGPIO26pins,$PiGPIO40pins;
global $ESP8266pins,$ESP01pins,$ESP07pins,$espMCU01pins;
global $PiPluspins,$PiPlus16pins;
global $UserModePins;

$UserModePins = array("not_used" 				=> "Non utilisée",
										"input_binary" 			=> "iEntrée Numérique (Sous-type : binaire)",
										"input_numeric"		=> "iEntrée Numérique (Sous-type : numérique)",
										"input_string"			=> "iEntrée Numérique (Sous-type : autre)",
										"output_other" 		=> "oSortie Numérique (Sous-type : défaut) ",
										"output_slider" 		=> "oSortie Numérique (Sous-type : curseur) ",
										"output_message" 	=> "oSortie Numérique (Sous-type : message) "
										);
											
$ArduinoMODEpins = array(	"not_used" 			=> "Non utilisée",
												"input" 					=> "iEntrée Numérique",
												"input_pullup"			=> "iEntrée Numérique avec PULL-UP (Antiparasite et Signal inversé)",								
												"compteur_pullup" => "iEntrée compteur impulsions avec PULL-UP (Antiparasite et Signal inversé)",
												"pwm_input" 			=> "iEntrée Numérique Variable (0-255 sur 10s) en PULL-UP",
												"dht11" 					=> "iSonde DHT11",
												"dht21" 					=> "iSonde DHT21 (AM2301)",
												"dht22" 					=> "iSonde DHT22 (AM2302, AM2321)",
												"ds18b20" 				=> "iSonde DS18S20/DS18B20/DS1822", 
												"trigger" 					=> "oHC-SR04 Declencheur (Trigger pin)",
												"echo" 					=> "iHC-SR04 Distance (Echo pin)",												
												"switch" 					=> "oInverser la Sortie (SWITCH ON/OFF)",
												"low_relais" 			=> "oSortie mise à LOW (HIGH générée aussi) ",
												"low_pulse" 			=> "oSortie mise à LOW avec temporisation (minuterie) ",
												"high_pulse" 			=> "oSortie mise à HIGH avec temporisation (minuterie) ",		
												"teleinfoRX"			=> "iEntrée téléinfo EDF ( pin RX )",
												"SomfyRTS"			=> "Réservée Tests lib SomfyRTS (par Yogui).",
												"Send2LCD"			=> "Envoi d'un message sur LCD16x2"
												);
$ArduinoESPanalogPins = array(	"not_used" 			=> "Non utilisée",	
														"switch" 					=> "oInverser la Sortie (SWITCH ON/OFF)",
														"low_relais" 			=> "oSortie mise à LOW (HIGH générée aussi) ",
														"low_pulse" 			=> "oSortie mise à LOW avec temporisation (minuterie) ",
														"high_pulse" 			=> "oSortie mise à HIGH avec temporisation (minuterie) ",
														"analog_input" 		=> "Entrée Analogique"
													);
$PifaceMODEpinsIN = array(
												"not_used" 			=> "Non utilisée",	 
												"input_pullup"			=> "Entrée Numérique avec PULL-UP ",								
												"compteur_pullup" => "Entrée compteur impulsions avec PULL-UP "
												);		
$PifaceMODEpinsOUT = array(
												"not_used" 			=> "Non utilisée",	 
												"switch" 					=> "Inverser la Sortie (SWITCH ON/OFF)",
												"low_relais" 			=> "Sortie mise à LOW (HIGH générée aussi) ",
												"high_relais" 			=> "Sortie mise à HIGH (LOW générée aussi) ",
												"low_pulse" 			=> "Sortie mise à LOW avec temporisation (minuterie) ",
												"high_pulse" 			=> "Sortie mise à HIGH avec temporisation (minuterie) "		
												);	
$PiGPIOpins = array(
												"not_used" 			=> "Non utilisée",     
												"input" 					=> "iEntrée Numérique avec PULL-DOWN",
												"input_pullup"			=> "iEntrée Numérique avec PULL-UP ",								
												"compteur_pullup" => "iEntrée compteur impulsions avec PULL-UP",
 												"dht11" 					=> "iSonde DHT11",
												"dht22" 					=> "iSonde DHT22 (AM2302)",		
												"ds18b20" 				=> "iSonde DS18B20", 
												"trigger" 					=> "oHC-SR04 Declencheur (Trigger pin)",
												"echo" 					=> "iHC-SR04 Distance (Echo pin)",
												"switch" 					=> "oInverser la Sortie (SWITCH ON/OFF)",												
												"low_relais" 			=> "oSortie mise à LOW (HIGH générée aussi) ",
												"high_relais" 			=> "oSortie mise à HIGH (LOW générée aussi) ",
												"low_pulse" 			=> "oSortie mise à LOW avec temporisation (minuterie) ",
												"high_pulse" 			=> "oSortie mise à HIGH avec temporisation (minuterie) ",
												);     
$PiPluspins = array(
												"not_used" 			=> "Non utilisée",     
												"input" 					=> "iEntrée Numérique",
												"input_pullup"			=> "iEntrée Numérique avec PULL-UP ",								
												"compteur_pullup" => "iEntrée compteur impulsions avec PULL-UP",
												"switch" 					=> "oInverser la Sortie (SWITCH ON/OFF)",
												"low_relais" 			=> "oSortie mise à LOW (HIGH générée aussi) ",
												"high_relais" 			=> "oSortie mise à HIGH (LOW générée aussi) ",
												"low_pulse" 			=> "oSortie mise à LOW avec temporisation (minuterie) ",
												"high_pulse" 			=> "oSortie mise à HIGH avec temporisation (minuterie) ",	
												);     											
$ESP8266pins = array(
												"not_used" 			=> "Non utilisée",     
												"input" 					=> "iEntrée Numérique avec PULL-DOWN",
												"input_pullup"			=> "iEntrée Numérique avec PULL-UP ",								
												"compteur_pullup" => "iEntrée compteur impulsions avec PULL-UP",
												"pwm_input" 			=> "iEntrée Numérique Variable (0-255 sur 10s) en PULL-UP",
 												"dht11" 					=> "iSonde DHT11",
												"dht21" 					=> "iSonde DHT21 (AM2301)",
												"dht22" 					=> "iSonde DHT22 (AM2302, AM2321)",
												"ds18b20" 			=> "iSonde DS18S20/DS18B20/DS1822", 
												"trigger" 				=> "oHC-SR04 Declencheur (Trigger pin)",
												"echo" 					=> "iHC-SR04 Distance (Echo pin)",												
												"switch" 				=> "oInverser la Sortie (SWITCH ON/OFF)",
												"low_relais" 			=> "oSortie mise à LOW (HIGH générée aussi) ",
												"high_relais" 			=> "oSortie mise à HIGH (LOW générée aussi) ",
												"low_pulse" 			=> "oSortie mise à LOW avec temporisation (minuterie) ",
												"high_pulse" 			=> "oSortie mise à HIGH avec temporisation (minuterie) ",	
												"pwm_output"		=> "oSortie PWM",
												"teleinfoRX"			=> "iEntrée téléinfo EDF ( pin RX )",
												//"teleinfoTX"			=> "oSortie téléinfo EDF ( pin TX réservée mais inutilisée)",
												"Send2LCD"			=> "Envoi d'un message sur LCD16x2"
												);     	
$ESP01pins = array( 
	'0' 	=> array('Nom_pin' => 'GPIO 0','disable' => 0, 'ethernet' => 0, 'option' => ''),
    '1' 	=> array('Nom_pin' => 'GPIO TXD','disable' => 0, 'ethernet' => 0, 'option' => ''),
    '2' 	=> array('Nom_pin' => 'GPIO 2','disable' => 0, 'ethernet' => 0, 'option' => ''),
    '3' 	=> array('Nom_pin' => 'GPIO RXD','disable' => 0, 'ethernet' => 0, 'option' => ''),
    '4' 	=> array('Nom_pin' => 'GPIO','disable' => 1, 'ethernet' => 0, 'option' => ''),
    '5' 	=> array('Nom_pin' => 'GPIO','disable' => 1, 'ethernet' => 0, 'option' => ''),
    '6' 	=> array('Nom_pin' => 'GPIO','disable' => 1, 'ethernet' => 0, 'option' => ''),
    '7' 	=> array('Nom_pin' => 'GPIO','disable' => 1, 'ethernet' => 0, 'option' => ''),
    '8' 	=> array('Nom_pin' => 'GPIO','disable' => 1, 'ethernet' => 0, 'option' => ''),
    '9' 	=> array('Nom_pin' => 'GPIO','disable' => 1, 'ethernet' => 0, 'option' => ''),
    '10' 	=> array('Nom_pin' => 'GPIO','disable' => 1, 'ethernet' => 0, 'option' => ''),
    '11' 	=> array('Nom_pin' => 'GPIO','disable' => 1, 'ethernet' => 0, 'option' => ''),
    '12' 	=> array('Nom_pin' => 'GPIO','disable' => 1, 'ethernet' => 0, 'option' => ''),
    '13' 	=> array('Nom_pin' => 'GPIO','disable' => 1, 'ethernet' => 0, 'option' => ''),
    '14' 	=> array('Nom_pin' => 'GPIO','disable' => 1, 'ethernet' => 0, 'option' => ''),
    '15' 	=> array('Nom_pin' => 'GPIO','disable' => 1, 'ethernet' => 0, 'option' => ''),
	'16' 	=> array('Nom_pin' => 'GPIO XPD','disable' => 1, 'ethernet' => 0, 'option' =>  'R/W'),
    '17' 	=> array('Nom_pin' => 'ADC (A0)','disable' => 1, 'ethernet' => 0, 'option' => 'ANA') 
 );	
$ESP07pins = array( 
	'0' 	=> array('Nom_pin' => 'GPIO 0','disable' => 0, 'ethernet' => 0, 'option' => ''),
    '1' 	=> array('Nom_pin' => 'GPIO 1','disable' => 0, 'ethernet' => 0, 'option' => ''),
    '2' 	=> array('Nom_pin' => 'GPIO 2','disable' => 0, 'ethernet' => 0, 'option' => ''),
    '3' 	=> array('Nom_pin' => 'GPIO 3','disable' => 0, 'ethernet' => 0, 'option' => ''),
    '4' 	=> array('Nom_pin' => 'GPIO 4','disable' => 0, 'ethernet' => 0, 'option' => ''),
    '5' 	=> array('Nom_pin' => 'GPIO 5','disable' => 0, 'ethernet' => 0, 'option' => ''),
    '6' 	=> array('Nom_pin' => 'GPIO 6','disable' => 0, 'ethernet' => 0, 'option' => ''),
    '7' 	=> array('Nom_pin' => 'GPIO 7','disable' => 0, 'ethernet' => 0, 'option' => ''),
    '8' 	=> array('Nom_pin' => 'GPIO 8','disable' => 0, 'ethernet' => 0, 'option' => ''),
    '9' 	=> array('Nom_pin' => 'GPIO 9','disable' => 0, 'ethernet' => 0, 'option' => ''),
    '10' 	=> array('Nom_pin' => 'GPIO 10','disable' => 0, 'ethernet' => 0, 'option' => ''),
    '11' 	=> array('Nom_pin' => 'GPIO 11','disable' => 0, 'ethernet' => 0, 'option' => ''),
    '12' 	=> array('Nom_pin' => 'GPIO 12','disable' => 0, 'ethernet' => 0, 'option' => ''),
    '13' 	=> array('Nom_pin' => 'GPIO 13','disable' => 0, 'ethernet' => 0, 'option' => ''),
    '14' 	=> array('Nom_pin' => 'GPIO 14','disable' => 0, 'ethernet' => 0, 'option' => ''),
    '15' 	=> array('Nom_pin' => 'GPIO 15','disable' => 0, 'ethernet' => 0, 'option' => ''),
	'16' 	=> array('Nom_pin' => 'GPIO 16 XPD','disable' => 0, 'ethernet' => 0, 'option' =>  'R/W'),
    '17' 	=> array('Nom_pin' => 'ADC (A0)','disable' => 0, 'ethernet' => 0, 'option' => 'ANA')
 );	 
$espMCU01pins = array( 
	'0' 	=> array('Nom_pin' => 'D3',	'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '1' 	=> array('Nom_pin' => 'D10','disable' => 0, 'ethernet' => 0, 'option' => 'TX'),
    '2' 	=> array('Nom_pin' => 'D4',	'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '3' 	=> array('Nom_pin' => 'D9 ',	'disable' => 0, 'ethernet' => 0, 'option' => 'RX'),
    '4' 	=> array('Nom_pin' => 'D2',	'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '5' 	=> array('Nom_pin' => 'D1',	'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '6' 	=> array('Nom_pin' => 'NC',	'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '7' 	=> array('Nom_pin' => 'NC',	'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '8' 	=> array('Nom_pin' => 'NC',	'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '9' 	=> array('Nom_pin' => 'D11','disable' => 0, 'ethernet' => 0, 'option' => 'SD2'),
    '10' 	=> array('Nom_pin' => 'D12','disable' => 0, 'ethernet' => 0, 'option' => 'SD3'),
    '11' 	=> array('Nom_pin' => 'NC',	'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '12' 	=> array('Nom_pin' => 'D6',	'disable' => 0, 'ethernet' => 0, 'option' => 'Q'),
    '13' 	=> array('Nom_pin' => 'D7',	'disable' => 0, 'ethernet' => 0, 'option' => 'D'),
    '14' 	=> array('Nom_pin' => 'D5',	'disable' => 0, 'ethernet' => 0, 'option' => 'CLK'),
    '15' 	=> array('Nom_pin' => 'D8',	'disable' => 0, 'ethernet' => 0, 'option' => 'CS'),
	'16' 	=> array('Nom_pin' => 'D0',	'disable' => 0, 'ethernet' => 0, 'option' => 'R/W'),
    '17' 	=> array('Nom_pin' => 'A0',	'disable' => 0, 'ethernet' => 0, 'option' => 'ANA')
 );	 
$PiGPIO26pins = array( 
    '1' 	=> array('Nom_pin' => '3.3V', 	        'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '2' 	=> array('Nom_pin' => '5 V', 	            'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '3' 	=> array('Nom_pin' => 'GPIO2 I²C', 'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '4' 	=> array('Nom_pin' => '5 V', 	            'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '5' 	=> array('Nom_pin' => 'GPIO3 I²C',	'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '6' 	=> array('Nom_pin' => 'G N D', 	    'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '7' 	=> array('Nom_pin' => 'GPIO4', 	    'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 7'),
    '8' 	=> array('Nom_pin' => 'GPIO14 UART', 	'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '9' 	=> array('Nom_pin' => 'G N D', 	    'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '10' 	=> array('Nom_pin' => 'GPIO15 UART', 	'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '11' 	=> array('Nom_pin' => 'GPIO17', 	'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 11'),
    '12' 	=> array('Nom_pin' => 'GPIO18', 	'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 12'),
    '13' 	=> array('Nom_pin' => 'GPIO27', 	'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 13'),
    '14' 	=> array('Nom_pin' => 'G N D', 	    'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '15' 	=> array('Nom_pin' => 'GPIO22', 	'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 15'),
    '16' 	=> array('Nom_pin' => 'GPIO23', 	'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 16'),
    '17' 	=> array('Nom_pin' => '3.3V', 	        'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '18' 	=> array('Nom_pin' => 'GPIO24', 	'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 18'),
    '19' 	=> array('Nom_pin' => 'GPIO10 SPI', 	'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '20' 	=> array('Nom_pin' => 'G N D', 	    'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '21' 	=> array('Nom_pin' => 'GPIO9 SPI','disable' => 1, 'ethernet' => 0, 'option' => ''),
    '22' 	=> array('Nom_pin' => 'GPIO25', 	'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 22'),
    '23' 	=> array('Nom_pin' => 'GPIO11 SPI', 	'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '24' 	=> array('Nom_pin' => 'GPIO8 SPI','disable' => 1, 'ethernet' => 0, 'option' => ''),
    '25' 	=> array('Nom_pin' => 'G N D', 	    'disable' => 1, 'ethernet' => 0, 'option' => ''),    
    '26' 	=> array('Nom_pin' => 'GPIO7 SPI','disable' => 1, 'ethernet' => 0, 'option' => '')    
 );	 
$PiGPIO40pins = array( 
    '1' 	=> array('Nom_pin' => '3.3V', 	        'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '2' 	=> array('Nom_pin' => '5 V', 	            'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '3' 	=> array('Nom_pin' => 'GPIO2 I²C', 'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '4' 	=> array('Nom_pin' => '5 V', 	            'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '5' 	=> array('Nom_pin' => 'GPIO3 I²C',	'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '6' 	=> array('Nom_pin' => 'G N D', 	    'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '7' 	=> array('Nom_pin' => 'GPIO4', 	    'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 7'),
    '8' 	=> array('Nom_pin' => 'GPIO14 UART', 	'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '9' 	=> array('Nom_pin' => 'G N D', 	    'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '10' 	=> array('Nom_pin' => 'GPIO15 UART', 	'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '11' 	=> array('Nom_pin' => 'GPIO17', 	'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 11'),
    '12' 	=> array('Nom_pin' => 'GPIO18', 	'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 12'),
    '13' 	=> array('Nom_pin' => 'GPIO27', 	'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 13'),
    '14' 	=> array('Nom_pin' => 'G N D', 	    'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '15' 	=> array('Nom_pin' => 'GPIO22', 	'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 15'),
    '16' 	=> array('Nom_pin' => 'GPIO23', 	'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 16'),
    '17' 	=> array('Nom_pin' => '3.3V', 	        'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '18' 	=> array('Nom_pin' => 'GPIO24', 	'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 18'),
    '19' 	=> array('Nom_pin' => 'GPIO10 SPI', 	'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '20' 	=> array('Nom_pin' => 'G N D', 	    'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '21' 	=> array('Nom_pin' => 'GPIO9 SPI','disable' => 1, 'ethernet' => 0, 'option' => ''),
    '22' 	=> array('Nom_pin' => 'GPIO25', 	'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 22'),
    '23' 	=> array('Nom_pin' => 'GPIO11 SPI', 	'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '24' 	=> array('Nom_pin' => 'GPIO8 SPI','disable' => 1, 'ethernet' => 0, 'option' => ''),
    '25' 	=> array('Nom_pin' => 'G N D', 	    'disable' => 1, 'ethernet' => 0, 'option' => ''),    
    '26' 	=> array('Nom_pin' => 'GPIO7 SPI','disable' => 1, 'ethernet' => 0, 'option' => ''),        
    '27' 	=> array('Nom_pin' => 'D N C', 	    'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '28' 	=> array('Nom_pin' => 'D N C', 	    'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '29' 	=> array('Nom_pin' => 'GPIO5', 	    'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 29'),
    '30' 	=> array('Nom_pin' => 'G N D', 	    'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '31' 	=> array('Nom_pin' => 'GPIO6', 	    'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 31'),
    '32' 	=> array('Nom_pin' => 'GPIO12', 	'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 32'),
    '33' 	=> array('Nom_pin' => 'GPIO13', 	'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 33'),
    '34' 	=> array('Nom_pin' => 'G N D', 	    'disable' => 1, 'ethernet' => 0, 'option' => ''),
    '35' 	=> array('Nom_pin' => 'GPIO19',     'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 35'),
    '36' 	=> array('Nom_pin' => 'GPIO16', 	'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 36'),
    '37' 	=> array('Nom_pin' => 'GPIO26', 	'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 37'),
    '38' 	=> array('Nom_pin' => 'GPIO20',     'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 38'),
    '39' 	=> array('Nom_pin' => 'G N D', 	    'disable' => 1, 'ethernet' => 0, 'option' => ''),    
    '40' 	=> array('Nom_pin' => 'GPIO21',     'disable' => 0, 'ethernet' => 0, 'option' => 'Pin 40')       
 );	  
$Pifacepins = array( 
    '0' 	=> array('Nom_pin' => 'DIGITAL IN 0', 	'disable' => 0, 'ethernet' => 0, 'option' => 'IN'),
    '1' 	=> array('Nom_pin' => 'DIGITAL IN 1', 	'disable' => 0, 'ethernet' => 0, 'option' => 'IN'),
    '2' 	=> array('Nom_pin' => 'DIGITAL IN 2', 	'disable' => 0, 'ethernet' => 0, 'option' => 'IN'),
    '3' 	=> array('Nom_pin' => 'DIGITAL IN 3', 	'disable' => 0, 'ethernet' => 0, 'option' => 'IN'),
    '4' 	=> array('Nom_pin' => 'DIGITAL IN 4', 	'disable' => 0, 'ethernet' => 0, 'option' => 'IN'),
    '5' 	=> array('Nom_pin' => 'DIGITAL IN 5', 	'disable' => 0, 'ethernet' => 0, 'option' => 'IN'),
    '6' 	=> array('Nom_pin' => 'DIGITAL IN 6', 	'disable' => 0, 'ethernet' => 0, 'option' => 'IN'),
    '7' 	=> array('Nom_pin' => 'DIGITAL IN 7', 	'disable' => 0, 'ethernet' => 0, 'option' => 'IN'),
    '8' 	=> array('Nom_pin' => 'DIGITAL OUT 0', 	'disable' => 0, 'ethernet' => 0, 'option' => 'LED RELAY'),
    '9' 	=> array('Nom_pin' => 'DIGITAL OUT 1', 	'disable' => 0, 'ethernet' => 0, 'option' => 'LED RELAY'),
    '10' 	=> array('Nom_pin' => 'DIGITAL OUT 2', 	'disable' => 0, 'ethernet' => 0, 'option' => 'LED'),
    '11' 	=> array('Nom_pin' => 'DIGITAL OUT 3', 	'disable' => 0, 'ethernet' => 0, 'option' => 'LED'),
    '12' 	=> array('Nom_pin' => 'DIGITAL OUT 4', 	'disable' => 0, 'ethernet' => 0, 'option' => 'LED'),
    '13' 	=> array('Nom_pin' => 'DIGITAL OUT 5', 	'disable' => 0, 'ethernet' => 0, 'option' => 'LED'),
    '14' 	=> array('Nom_pin' => 'DIGITAL OUT 6', 	'disable' => 0, 'ethernet' => 0, 'option' => 'LED'),
    '15' 	=> array('Nom_pin' => 'DIGITAL OUT 7', 	'disable' => 0, 'ethernet' => 0, 'option' => 'LED')
 );	

$PiPlus16pins = array( 
    '0' 	=> array('Nom_pin' => 'DIGITAL I/O 1', 		'disable' => 0, 'ethernet' => 0, 'option' => 'GPA0'),
    '1' 	=> array('Nom_pin' => 'DIGITAL I/O 2', 		'disable' => 0, 'ethernet' => 0, 'option' => 'GPA1'),
    '2' 	=> array('Nom_pin' => 'DIGITAL I/O 3', 		'disable' => 0, 'ethernet' => 0, 'option' => 'GPA2'),
    '3' 	=> array('Nom_pin' => 'DIGITAL I/O 4', 		'disable' => 0, 'ethernet' => 0, 'option' => 'GPA3'),
    '4' 	=> array('Nom_pin' => 'DIGITAL I/O 5', 		'disable' => 0, 'ethernet' => 0, 'option' => 'GPA4'),
    '5' 	=> array('Nom_pin' => 'DIGITAL I/O 6', 		'disable' => 0, 'ethernet' => 0, 'option' => 'GPA5'),
    '6' 	=> array('Nom_pin' => 'DIGITAL I/O 7', 		'disable' => 0, 'ethernet' => 0, 'option' => 'GPA6'),
    '7' 	=> array('Nom_pin' => 'DIGITAL I/O 8', 		'disable' => 0, 'ethernet' => 0, 'option' => 'GPA7'),
    '8' 	=> array('Nom_pin' => 'DIGITAL I/O 9', 		'disable' => 0, 'ethernet' => 0, 'option' => 'GPB0'),
    '9' 	=> array('Nom_pin' => 'DIGITAL I/O 10', 	'disable' => 0, 'ethernet' => 0, 'option' => 'GPB1'),
    '10' 	=> array('Nom_pin' => 'DIGITAL I/O 11', 	'disable' => 0, 'ethernet' => 0, 'option' => 'GPB2'),
    '11' 	=> array('Nom_pin' => 'DIGITAL I/O 12', 	'disable' => 0, 'ethernet' => 0, 'option' => 'GPB3'),
    '12' 	=> array('Nom_pin' => 'DIGITAL I/O 13', 	'disable' => 0, 'ethernet' => 0, 'option' => 'GPB4'),
    '13' 	=> array('Nom_pin' => 'DIGITAL I/O 14', 	'disable' => 0, 'ethernet' => 0, 'option' => 'GPB5'),
    '14' 	=> array('Nom_pin' => 'DIGITAL I/O 15', 	'disable' => 0, 'ethernet' => 0, 'option' => 'GPB6'),
    '15' 	=> array('Nom_pin' => 'DIGITAL I/O 16', 	'disable' => 0, 'ethernet' => 0, 'option' => 'GPB7')
 );	

$Arduino328pins = array(
    '0' 	=> array('Nom_pin' => 'DIGITAL I/O 0', 	'disable' => 1, 'ethernet' => 0, 'option' => 'SerialRX'),
    '1' 	=> array('Nom_pin' => 'DIGITAL I/O 1', 	'disable' => 1, 'ethernet' => 0, 'option' => 'SerialTX'),
    '2' 	=> array('Nom_pin' => 'DIGITAL I/O 2', 	'disable' => 0, 'ethernet' => 0, 'option' => 'INT0'),
    '3' 	=> array('Nom_pin' => 'DIGITAL I/O 3', 	'disable' => 0, 'ethernet' => 0, 'option' => 'PWM INT1'),
    '4' 	=> array('Nom_pin' => 'DIGITAL I/O 4', 	'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '5' 	=> array('Nom_pin' => 'DIGITAL I/O 5', 	'disable' => 0, 'ethernet' => 0, 'option' => 'PWM'),
    '6' 	=> array('Nom_pin' => 'DIGITAL I/O 6', 	'disable' => 0, 'ethernet' => 0, 'option' => 'PWM'),
    '7' 	=> array('Nom_pin' => 'DIGITAL I/O 7', 	'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '8' 	=> array('Nom_pin' => 'DIGITAL I/O 8', 	'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '9' 	=> array('Nom_pin' => 'DIGITAL I/O 9', 	'disable' => 0, 'ethernet' => 0, 'option' => 'PWM'),
    '10' 	=> array('Nom_pin' => 'DIGITAL I/O 10', 'disable' => 0, 'ethernet' => 1, 'option' => 'PWM'),
    '11' 	=> array('Nom_pin' => 'DIGITAL I/O 11', 'disable' => 0, 'ethernet' => 1, 'option' => 'PWM'),
    '12' 	=> array('Nom_pin' => 'DIGITAL I/O 12', 'disable' => 0, 'ethernet' => 1, 'option' => ''),
    '13' 	=> array('Nom_pin' => 'DIGITAL I/O 13', 'disable' => 0, 'ethernet' => 1, 'option' => 'LED'),
    '54' 	=> array('Nom_pin' => 'ANALOG IN A0', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),
    '55'	=> array('Nom_pin' => 'ANALOG IN A1', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),
    '56' 	=> array('Nom_pin' => 'ANALOG IN A2', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),
    '57' 	=> array('Nom_pin' => 'ANALOG IN A3', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),
    '58' 	=> array('Nom_pin' => 'ANALOG IN A4', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),
    '59' 	=> array('Nom_pin' => 'ANALOG IN A5', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA')
 );

$ArduinoMEGApins = array(
    '0' 	=> array('Nom_pin' => 'DIGITAL I/O 0', 	'disable' => 1, 'ethernet' => 0, 'option' => 'SerialRX'),
    '1' 	=> array('Nom_pin' => 'DIGITAL I/O 1', 	'disable' => 1, 'ethernet' => 0, 'option' => 'SerialTX'),
    '2' 	=> array('Nom_pin' => 'DIGITAL I/O 2', 	'disable' => 0, 'ethernet' => 0, 'option' => 'PWM INT0'),
    '3' 	=> array('Nom_pin' => 'DIGITAL I/O 3', 	'disable' => 0, 'ethernet' => 0, 'option' => 'PWM INT1'),
    '4' 	=> array('Nom_pin' => 'DIGITAL I/O 4', 	'disable' => 0, 'ethernet' => 0, 'option' => 'PWM'),
    '5' 	=> array('Nom_pin' => 'DIGITAL I/O 5', 	'disable' => 0, 'ethernet' => 0, 'option' => 'PWM'),
    '6' 	=> array('Nom_pin' => 'DIGITAL I/O 6', 	'disable' => 0, 'ethernet' => 0, 'option' => 'PWM'),
    '7' 	=> array('Nom_pin' => 'DIGITAL I/O 7', 	'disable' => 0, 'ethernet' => 0, 'option' => 'PWM'),
    '8' 	=> array('Nom_pin' => 'DIGITAL I/O 8', 	'disable' => 0, 'ethernet' => 0, 'option' => 'PWM'),
    '9' 	=> array('Nom_pin' => 'DIGITAL I/O 9', 	'disable' => 0, 'ethernet' => 0, 'option' => 'PWM'),
    '10' 	=> array('Nom_pin' => 'DIGITAL I/O 10', 'disable' => 0, 'ethernet' => 1, 'option' => 'PWM'),
    '11' 	=> array('Nom_pin' => 'DIGITAL I/O 11', 'disable' => 0, 'ethernet' => 0, 'option' => 'PWM'),
    '12' 	=> array('Nom_pin' => 'DIGITAL I/O 12', 'disable' => 0, 'ethernet' => 0, 'option' => 'PWM'),
    '13' 	=> array('Nom_pin' => 'DIGITAL I/O 13', 'disable' => 0, 'ethernet' => 0, 'option' => 'PWM LED'),	
    '14' 	=> array('Nom_pin' => 'DIGITAL I/O 14', 'disable' => 0, 'ethernet' => 0, 'option' => 'SerialTX3'),
    '15' 	=> array('Nom_pin' => 'DIGITAL I/O 15', 'disable' => 0, 'ethernet' => 0, 'option' => 'SerialRX3'),
    '16' 	=> array('Nom_pin' => 'DIGITAL I/O 16', 'disable' => 0, 'ethernet' => 0, 'option' => 'SerialTX2'),
    '17'  => array('Nom_pin' => 'DIGITAL I/O 17', 'disable' => 0, 'ethernet' => 0, 'option' => 'SerialRX2'),
    '18'  => array('Nom_pin' => 'DIGITAL I/O 18', 'disable' => 0, 'ethernet' => 0, 'option' => 'INT5 SerialTX1'),
    '19'  => array('Nom_pin' => 'DIGITAL I/O 19', 'disable' => 0, 'ethernet' => 0, 'option' => 'INT4 SerialTX1'),
    '20'  => array('Nom_pin' => 'DIGITAL I/O 20', 'disable' => 0, 'ethernet' => 0, 'option' => 'INT3'),
    '21' 	=> array('Nom_pin' => 'DIGITAL I/O 21', 'disable' => 0, 'ethernet' => 0, 'option' => 'INT2'),	
    '22' 	=> array('Nom_pin' => 'DIGITAL I/O 22', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '23' 	=> array('Nom_pin' => 'DIGITAL I/O 23', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '24' 	=> array('Nom_pin' => 'DIGITAL I/O 24', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '25' 	=> array('Nom_pin' => 'DIGITAL I/O 25', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '26' 	=> array('Nom_pin' => 'DIGITAL I/O 26', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '27' 	=> array('Nom_pin' => 'DIGITAL I/O 27', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '28' 	=> array('Nom_pin' => 'DIGITAL I/O 28', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '29' 	=> array('Nom_pin' => 'DIGITAL I/O 29', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '30' 	=> array('Nom_pin' => 'DIGITAL I/O 30', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '31' 	=> array('Nom_pin' => 'DIGITAL I/O 31', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '32' 	=> array('Nom_pin' => 'DIGITAL I/O 32', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '33' 	=> array('Nom_pin' => 'DIGITAL I/O 33', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '34' 	=> array('Nom_pin' => 'DIGITAL I/O 34', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '35' 	=> array('Nom_pin' => 'DIGITAL I/O 35', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '36' 	=> array('Nom_pin' => 'DIGITAL I/O 36', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '37' 	=> array('Nom_pin' => 'DIGITAL I/O 37', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '38' 	=> array('Nom_pin' => 'DIGITAL I/O 38', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '39' 	=> array('Nom_pin' => 'DIGITAL I/O 39', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '40' 	=> array('Nom_pin' => 'DIGITAL I/O 40', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '41' 	=> array('Nom_pin' => 'DIGITAL I/O 41', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '42' 	=> array('Nom_pin' => 'DIGITAL I/O 42', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '43' 	=> array('Nom_pin' => 'DIGITAL I/O 43', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '44' 	=> array('Nom_pin' => 'DIGITAL I/O 44', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '45' 	=> array('Nom_pin' => 'DIGITAL I/O 45', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '46' 	=> array('Nom_pin' => 'DIGITAL I/O 46', 'disable' => 0, 'ethernet' => 0, 'option' => 'PWM'),
    '47' 	=> array('Nom_pin' => 'DIGITAL I/O 47', 'disable' => 0, 'ethernet' => 0, 'option' => 'PWM'),
    '48' 	=> array('Nom_pin' => 'DIGITAL I/O 48', 'disable' => 0, 'ethernet' => 0, 'option' => 'PWM'),
    '49' 	=> array('Nom_pin' => 'DIGITAL I/O 49', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '50' 	=> array('Nom_pin' => 'DIGITAL I/O 50', 'disable' => 0, 'ethernet' => 1, 'option' => ''),
    '51' 	=> array('Nom_pin' => 'DIGITAL I/O 51', 'disable' => 0, 'ethernet' => 1, 'option' => ''),
    '52' 	=> array('Nom_pin' => 'DIGITAL I/O 52', 'disable' => 0, 'ethernet' => 1, 'option' => ''),
    '53' 	=> array('Nom_pin' => 'DIGITAL I/O 53', 'disable' => 0, 'ethernet' => 0, 'option' => ''),
    '54' 	=> array('Nom_pin' => 'ANALOG IN A0', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),
    '55'	=> array('Nom_pin' => 'ANALOG IN A1', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),
    '56' 	=> array('Nom_pin' => 'ANALOG IN A2', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),
    '57' 	=> array('Nom_pin' => 'ANALOG IN A3', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),
    '58' 	=> array('Nom_pin' => 'ANALOG IN A4', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),
    '59' 	=> array('Nom_pin' => 'ANALOG IN A5', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),	
    '60' 	=> array('Nom_pin' => 'ANALOG IN A6', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),
    '61' 	=> array('Nom_pin' => 'ANALOG IN A7', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),
    '62' 	=> array('Nom_pin' => 'ANALOG IN A8', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),
    '63' 	=> array('Nom_pin' => 'ANALOG IN A9', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),
    '64' 	=> array('Nom_pin' => 'ANALOG IN A10', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),
    '65' 	=> array('Nom_pin' => 'ANALOG IN A11', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),
    '66' 	=> array('Nom_pin' => 'ANALOG IN A12', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),
    '67' 	=> array('Nom_pin' => 'ANALOG IN A13', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),
    '68' 	=> array('Nom_pin' => 'ANALOG IN A14', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA'),
    '69' 	=> array('Nom_pin' => 'ANALOG IN A15', 'disable' => 0, 'ethernet' => 0, 'option' => 'ANA')
  );
?>