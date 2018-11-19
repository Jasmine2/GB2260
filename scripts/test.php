<?php
/**
 * User: Jasmine2
 * Date: 2018/9/10 19:24
 * Email: youjingqiang@gmail.com
 * Copyright (c) Guangzhou Zhishen Data Service co,. Ltd
 */
require 'vendor/autoload.php';

$sfzs = [
    '110101198305271527'
];
foreach ($sfzs as $k => $item) {
    $identy = new \jasmine2\IdentityCard\China\Identity($item);
    echo "$k:" . $identy->region()->treeString() . "\n";
}
