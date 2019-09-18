<?php
$xmlDoc = simplexml_load_file("2019.xml");
foreach ($xmlDoc->children() as $child) {
    //$child就是一个person节点
    // foreach ($child->attributes() as $attr) {
    //     echo $attr->getName() . " = " . $attr . "<br/>";
    // }
    foreach ($child->children() as $personChild) {
        if ($personChild->getName() == 'product_lineitems') {
            $value = (string) $personChild->product_lineitem[0]->product_id;
        }
    }
}
