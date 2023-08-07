<?php

$client                              = new SoapClient("https://www1.gsis.gr/webtax2/wsgsis/RgWsPublic/RgWsPublicPort?WSDL", array('trace' => true));
$authHeader                          = new \stdClass();
$authHeader->UsernameToken->Username = "USERNAME";
$authHeader->UsernameToken->Password = "PASSWORD";
$Headers[]                           = new SoapHeader('http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd', 'Security', $authHeader, true);
$client->__setSoapHeaders($Headers);
$options['afmCalledFor'] = "TAX ID TO GET INFORMATION FOR";

$response = $client->rgWsPublicAfmMethod($options);
// Handle response
