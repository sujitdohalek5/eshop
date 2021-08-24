<?php

include 'templates/header.php';


foreach ($include_page as $key => $value) {
    include $value.'.php';
}


include 'templates/footer.php';


