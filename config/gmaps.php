<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Using a localised google domain gives more accurated results on geolocation
 * For example, searches for "Toledo" will return different results within the domain of Spain (http://maps.google.es) 
 * specified by a country code of "es" than within the default domain within the United States (http://maps.google.com).
 */

$config['api_domain'] = 'maps.google.com';

/**
 * This is used to determine how many times we should retry the geocode when Google sends back a 620 status code.
 * The 620 status code is used as a way to let you know Google is rate limiting your requests.
 */

$config['retries'] = 10;

/**
 * This is used to determine how long we should wait before retrying (in microseconds).
 * Default: 100000 (0.1 seconds)
 */

$config['retry_delay'] = 100000;