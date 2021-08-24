<?php


function first_cap($para = "data_of_the_day"){
    $new_str = '';
    foreach (explode("_", $para) as $key => $value) {
        $new_str = $new_str." ".ucfirst($value);
    }
    return $new_str;
}

function base_url($uri = ''){
    return BASE_URL.$uri;
}
function print_pre($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

