<?php
// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.

if (move_uploaded_file($_FILES['userfile']['tmp_name'], '/uploads/' . basename($_FILES['userfile']['name']))) {
    echo "File is valid, and was successfully uploaded....\n";
} else {
    echo "You better check the debug info... \n";
}

echo 'Here is some more debugging info:';
echo '<pre>';
var_dump($_FILES);
echo "</pre>";