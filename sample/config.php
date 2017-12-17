<?php

    $paysafeApiKeyId = 'OT-171120';
    $paysafeApiKeySecret = 'B-qa2-0-5a35d64a-0-302c021468be91924b1c55a469e2053098b4eb52add9d2a2021477114219d70f0bee945bc7cc5bbb94de3f87cd84';
    $paysafeAccountNumber = '1001177820';
// The currencyCode should match the currency of your Paysafe account.
// The currencyBaseUnitsMultipler should in turn match the currencyCode.
// Since the API accepts only integer values, the currencyBaseUnitMultiplier is used convert the decimal amount into the accepted base units integer value.
    $currencyCode = 'USD'; // for example: CAD
    $currencyBaseUnitsMultiplier = '100'; // for example: 100

    require_once('../source/paysafe.php');
    
