<?php
global $dt_theme_social_bookmarks; // Used in Blog single & page tab in BPanel
$dt_theme_social_bookmarks = array(array(
							"id"=>		"googleplus",
							"label"=>	__("Show Google+ One",'iamd_text_domain'),
							"options"=>	array(
								"standard"=>__("Standard",'iamd_text_domain'),
								"small"=>__("Small",'iamd_text_domain'),
								"medium"=>__("Medium",'iamd_text_domain'),
								"tall"=>__("Tall",'iamd_text_domain')),
							"lang"=>array(
								"ar" => __( "Arabic", 'iamd_text_domain' ),
								"bn" => __( "Bengali", 'iamd_text_domain' ),
								"bg" => __( "Bulgarian", 'iamd_text_domain' ),
								"ca" => __( "Catalan", 'iamd_text_domain' ),
								"zh" => __( "Chinese", 'iamd_text_domain' ),
								"zh_CN" => __( "Chinese (China)", 'iamd_text_domain' ),
								"zh_HK" => __( "Chinese (Hong Kong)", 'iamd_text_domain' ),
								"zh_TW" => __( "Chinese (Taiwan)", 'iamd_text_domain' ),
								"hr" => __( "Croation", 'iamd_text_domain' ),
								"cs" => __( "Czech", 'iamd_text_domain' ),
								"da" => __( "Danish", 'iamd_text_domain' ),
								"nl" => __( "Dutch", 'iamd_text_domain' ),
								"en_IN" => __( "English (India)", 'iamd_text_domain' ),
								"en_IE" => __( "English (Ireland)", 'iamd_text_domain' ),
								"en_SG" => __( "English (Singapore)", 'iamd_text_domain' ),
								"en_ZA" => __( "English (South Africa)", 'iamd_text_domain' ),
								"en_GB" => __( "English (United Kingdom)", 'iamd_text_domain' ),
								"fil" => __( "Filipino", 'iamd_text_domain' ),
								"fi" => __( "Finnish", 'iamd_text_domain' ),
								"fr" => __( "French", 'iamd_text_domain' ),
								"de" => __( "German", 'iamd_text_domain' ),
								"de_CH" => __( "German (Switzerland)", 'iamd_text_domain' ),
								"el" => __( "Greek", 'iamd_text_domain' ),
								"gu" => __( "Gujarati", 'iamd_text_domain' ),
								"iw" => __( "Hebrew", 'iamd_text_domain' ),
								"hi" => __( "Hindi", 'iamd_text_domain' ),
								"hu" => __( "Hungarian", 'iamd_text_domain' ),
								"in" => __( "Indonesian", 'iamd_text_domain' ),
								"it" => __( "Italian", 'iamd_text_domain' ),
								"ja" => __( "Japanese", 'iamd_text_domain' ),
								"kn" => __( "Kannada", 'iamd_text_domain' ),
								"ko" => __( "Korean", 'iamd_text_domain' ),
								"lv" => __( "Latvian", 'iamd_text_domain' ),
								"ln" => __( "Lingala", 'iamd_text_domain' ),
								"lt" => __( "Lithuanian", 'iamd_text_domain' ),
								"ms" => __( "Malay", 'iamd_text_domain' ),
								"ml" => __( "Malayalam", 'iamd_text_domain' ),
								"mr" => __( "Marathi", 'iamd_text_domain' ),
								"no" => __( "Norwegian", 'iamd_text_domain' ),
								"or" => __( "Oriya", 'iamd_text_domain' ),
								"fa" => __( "Persian", 'iamd_text_domain' ),
								"pl" => __( "Polish", 'iamd_text_domain' ),
								"pt_BR" => __( "Portugese (Brazil)", 'iamd_text_domain' ),
								"pt_PT" => __( "Portugese (Portugal)", 'iamd_text_domain' ),
								"ro" => __( "Romanian", 'iamd_text_domain' ),
								"ru" => __( "Russian", 'iamd_text_domain' ),
								"sr" => __( "Serbian", 'iamd_text_domain' ),
								"sk" => __( "Slovak", 'iamd_text_domain' ),
								"sl" => __( "Slovenian", 'iamd_text_domain' ),
								"es" => __( "Spanish", 'iamd_text_domain' ),
								"sv" => __( "Swedish", 'iamd_text_domain' ),
								"gsw" => __( "Swiss German", 'iamd_text_domain' ),
								"ta" => __( "Tamil", 'iamd_text_domain' ),
								"te" => __( "Telugu", 'iamd_text_domain' ),
								"th" => __( "Thai", 'iamd_text_domain' ),
								"tr" => __( "Turkish", 'iamd_text_domain' ),
								"uk" => __( "Ukranian", 'iamd_text_domain' ),
								"vi" => __( "Vietnamese", 'iamd_text_domain' ))
						),array(
							"id"=>		"fb_like",
							"label"=>	__("Show Facebook like",'iamd_text_domain'),
							"options"=>	array(
								"standard"=>__("Standard",'iamd_text_domain'),
								"box_count" =>__("Box Count",'iamd_text_domain'),
								"button_count" =>__("Button Count",'iamd_text_domain')),
							"color-scheme"=>array("dark","light")
						),array(
							"id"=>		"digg",
							"label"=>	__("Show Digg",'iamd_text_domain'),
							"options"=>	array(
									"DiggWide"=>__("Wide",'iamd_text_domain'),
									"DiggMedium"=>__("Medium",'iamd_text_domain'),
									"DiggCompact"=>__("Compact",'iamd_text_domain'),
									"DiggIcon"=>__("Icon",'iamd_text_domain'))
						),array(
							"id"=>		"stumbleupon",
							"label"=>	__("Show Stumbleupon",'iamd_text_domain'),
							"options"=>	array(
										"1"=>__("style1",'iamd_text_domain'),
										"2"=>__("style2",'iamd_text_domain'),
										"3"=>__("style3",'iamd_text_domain'),
										"4"=>__("style4",'iamd_text_domain'),
										"5"=>__("style5",'iamd_text_domain'),
										"6"=>__("style6",'iamd_text_domain'))
						),array("id"=>		"linkedin",
							"label"=>	__("Show LinkedIn",'iamd_text_domain'),
							"options"=>	array("1"=>"style1","2"=>"style2","3"=>"style3")
						),array(
							"id"=>		"pintrest",
							"label"=>	__("Show Pintrest",'iamd_text_domain'),
							"options"=>	array("none" =>__("None",'iamd_text_domain'),"vertical" =>__("Vertical",'iamd_text_domain'),"horizontal"=>__("Horizontal",'iamd_text_domain'))
						),array(
							"id"=>		"delicious",
							"label"=>	__("Show Delicious",'iamd_text_domain'),
							"text"=>""
						),array(
							"id"=>		"twitter",
							"label"=>	__("Show Twitter",'iamd_text_domain'),
							"options"=>	array(
								"none" => __("None",'iamd_text_domain'),
								"vertical" => __("Vertical",'iamd_text_domain')
								,"horizontal"=>__("Horizontal",'iamd_text_domain')),
							"username"=>'',
							"lang"=>	array(
							    ""	 => __("Select",'iamd_text_domain'),
								"fr" => __( "French",'iamd_text_domain' ),
								"de" => __( "German",'iamd_text_domain' ),
								"it" => __( "Italian",'iamd_text_domain' ),
								"ja" => __( "Japanese",'iamd_text_domain' ),
								"ko" => __( "Korean",'iamd_text_domain' ),
								"ru" => __( "Russian",'iamd_text_domain' ),
								"es" => __( "Spanish",'iamd_text_domain' ),
								"tr" => __( "Turkish",'iamd_text_domain' ))
						));?>