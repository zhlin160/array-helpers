<?php
/**
 * Created by PhpStorm.
 * User: zh
 * Date: 2019/2/25
 * Time: 16:41
 */
require_once "../vendor/autoload.php";

use zhlin160\helpers\ArrayHelper;

$array = [
         ['id' => '123', 'data' => 'abc', 'device' => 'laptop'],
         ['id' => '345', 'data' => 'def', 'device' => 'tablet'],
         ['id' => '345', 'data' => 'hgi', 'device' => 'smartphone'],
];

//$result = ArrayHelper::index($array, null, 'id');
$result = ArrayHelper::getValue($array, 'id');
var_dump($result);