<?php

    $paysafeApiKeyId = 'test_ernexto';
    $paysafeApiKeySecret = 'B-qa2-0-5a35d321-0-302d021454bfc0f0e290d1b1a49edc0028deb55dce3470c102150094375cdb1619663689c9f2958b3c0bf3155a3afb';
    $paysafeAccountNumber = '1001177820';
// The currencyCode should match the currency of your Paysafe account.
// The currencyBaseUnitsMultipler should in turn match the currencyCode.
// Since the API accepts only integer values, the currencyBaseUnitMultiplier is used convert the decimal amount into the accepted base units integer value.
    $currencyCode = 'USD'; // for example: CAD
    $currencyBaseUnitsMultiplier = '100'; // for example: 100

    require_once('../source/paysafe.php');
    
