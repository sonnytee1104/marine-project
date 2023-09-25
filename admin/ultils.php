<?php
function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    exit;
}

function sanitize($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// function convertDate($date) {
//     return date('Y/m/d',strtotime($date));
// }


