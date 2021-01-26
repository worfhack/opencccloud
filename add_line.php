<?php
$new_array = [];
$array = explode("\n", file_get_contents('wp-config.php'));
$id = $argv[1];
$key = $argv[2];
$name = $argv[3 ];
foreach ($array as $line){

    $new_array[] = $line;
    if ($line == "<?php"){
        $text = "define( 'AS3CF_SETTINGS', serialize( array('provider' => 'aws','access-key-id' =>'".$id."' ,'secret-access-key' => '".$key."', 'copy-to-s3' => true,    'serve-from-s3' => true,) ) );";
        $new_array[] = $text;
        $text = "define( 'AS3CF_BUCKET', '".$name."');";
        $new_array[] = $text;
    }
}
$file="wp-config.php";
file_put_contents($file, "");
foreach($new_array as $line){
    file_put_contents($file, $line . "\n", FILE_APPEND );

}
?>
