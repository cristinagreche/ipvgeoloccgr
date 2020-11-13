<?php
use ipinfo\ipinfo\IPinfo;
 $access_token = '123456789abc'; $client = new IPinfo($access_token); $ip_address = '216.239.36.21';
 $details = $client->getDetails($ip_address);

 $detail->city;
Emeryville
 $details->loc;
37.8342,-122.2900

$access_token = '123456789abc';
$client = new IPinfo($access_token);

$details->hostname;
cpe-104-175-221-247.socal.res.rr.com

$details->country;
US
 $details->country_name;
United States

 $details->loc;
34.0293,-118.3570
$details->latitude;
34.0293
 $details->longitude;
-118.3570

 $details->all;
    {
    'asn': {  'asn': 'AS20001',
               'domain': 'twcable.com',
               'name': 'Time Warner Cable Internet LLC',
               'route': '104.172.0.0/14',
               'type': 'isp'},
    'city': 'Los Angeles',
    'company': {   'domain': 'twcable.com',
                   'name': 'Time Warner Cable Internet LLC',
                   'type': 'isp'},
    'country': 'US',
    'country_name': 'United States',
    'hostname': 'cpe-104-175-221-247.socal.res.rr.com',
    'ip': '104.175.221.247',
    'loc': '34.0293,-118.3570',
    'latitude': '34.0293',
    'longitude': '-118.3570',
    'phone': '323',
    'postal': '90016',
    'region': 'California'
    }

    $access_token = '123456789abc';
    $settings = ['cache_maxsize' => 30, 'cache_ttl' => 128];
    $client = new IPinfo($access_token, $settings);

    $access_token = '123456789abc';
    $settings = ['cache' => $my_fancy_custom_cache];
    $client = new IPinfo($access_token, $settings);

    {
        "BD": "Bangladesh",
        "BE": "Belgium",
        "BF": "Burkina Faso",
        "BG": "Bulgaria"
        ...
       }
       