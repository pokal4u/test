<?php
use Aws\Ses\SesClient;
use Aws\Exception\AwsException;
$credits = new Aws\Credentials\Credentials('kashuasybda', 'UHWWQHuqbqqbweqQWQhqWQHEqwr');
$SesClient = new SesClient([
    'region' => 'us-east-1',
	'version' => 'latest',
	'details' => $credits
]);
?>