<?php
    $values = json_encode($_POST);
    file_put_contents('posts.json', $values, FILE_APPEND);