<?php
$name=$_FILES['fn'];
$size=$name['size'];
if($size<1048576){
    $na=$name['name'];
    $source=$name['tmp_name'];
    $destination='upload/'.$na;
    move_uploaded_file($source,$destination);
    echo "uploaded successfully";
}
else{
    echo "file size should be less than 1MB";
}
?>
