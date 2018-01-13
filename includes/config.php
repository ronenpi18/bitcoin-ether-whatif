<?php

// Main website configuration options

$site_config = array(
	'website_url' => 'http://emberthemes.net/demo/what-if-bitcoin',
	'website_name' => 'WhatIf?',
	'default_title' => 'BitcoinWhatIf?',
	'default_description' => 'What if you invested $100 in bitcoin in 2011? Find out with this historic bitcoin price calculator.',
	'default_keywords' => 'Website Keywords',
	'default_image' => 'img.png'
	);


// Faucethub.io registered addresses

$ref = array(
  'BTC' => '15L7a3M82QTNtP9zfdNQV24NZQti3iREsq',
  'LTC' => 'LQWaDEHGaKbBRR6XeYZGzMqcuD3nXxK7Ce',
  'DOGE' => 'D6vDHAQs2DCpmBwBDyYmNq22VkskYM2ofJ',
  'BLK' => 'BFbGJd337MMd9EFn6dukg2XMpvENgpMAoZ',
  'DASH' => 'XoWTPAtENCUVHjr2SKrxE54XXWgxCLSJEr',
  'PPC' => 'PFY3ZjQBhDXxP52EZ8EM4Zpmw5RcSkTywP',
  'XPM' => 'AJYnAy1EPU7HT3SUDCMyVdx2ebcMBCiaE3'
  );


//////////////////////////////////////////////////////////////////////////
// Important stuff, don't change unless you know what you are doing!!! //
////////////////////////////////////////////////////////////////////////

// Allow getting the version number for support reasons

if(isset($_GET['version'])) {
	echo 'v1.0';
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>


<?php

// Main website configuration options

$site_config = array(
    'website_url' => 'https://www.cryptolist.co.il/ether/',
    'website_name' => 'כמה להשקיע?',
    'default_title' => 'כמה להשקיע?',
    'default_description' => 'What if you invested $100 in ethereum in 2016? Find out with this historic ethereum price calculator.',
    'default_keywords' => 'Website Keywords',
    'default_image' => 'img.png'
);


// Faucethub.io registered addresses

$ref = array(
    'BTC' => '15L7a3M82QTNtP9zfdNQV24NZQti3iREsq',
    'LTC' => 'LQWaDEHGaKbBRR6XeYZGzMqcuD3nXxK7Ce',
    'DOGE' => 'D6vDHAQs2DCpmBwBDyYmNq22VkskYM2ofJ',
    'BLK' => 'BFbGJd337MMd9EFn6dukg2XMpvENgpMAoZ',
    'DASH' => 'XoWTPAtENCUVHjr2SKrxE54XXWgxCLSJEr',
    'PPC' => 'PFY3ZjQBhDXxP52EZ8EM4Zpmw5RcSkTywP',
    'XPM' => 'AJYnAy1EPU7HT3SUDCMyVdx2ebcMBCiaE3'
);


//////////////////////////////////////////////////////////////////////////
// Important stuff, don't change unless you know what you are doing!!! //
////////////////////////////////////////////////////////////////////////

// Allow getting the version number for support reasons

if(isset($_GET['version'])) {
    echo 'v1.0';
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>


