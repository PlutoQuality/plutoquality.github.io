<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html">
<style type="text/css">
body {
    margin: 0 auto 20px;
    padding: 0;
    background-image: url("WS_BG.jpg");
    text-align: center;
}
td {
    padding: 0 0 50px;
    text-align: center;
    font: 9px sans-serif;
}
table {
    width: 100%;
}
img {
	opacity: 0.1;
    display: block;
    margin: 20px auto 10px;
    max-width: 320px;
    outline: solid;
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
}
img:hover {
	opacity: 1;
	max-width: 640px;
}
a:focus {
    outline: none;
}
</style>
</head>
<body>
 
<?php
$folder = 'img/';
$filetype = '*.*';
$files = glob($folder.$filetype);
$count = count($files);
 
$sortedArray = array();
for ($i = 0; $i < $count; $i++) {
    $sortedArray[date ('YmdHis', filemtime($files[$i]))] = $files[$i];
}
 
	
krsort($sortedArray);
echo '<table>';
foreach ($sortedArray as &$filename) {
    echo '<img src="'.$filename.'" />';
}
echo '</table>';
?>
</body>
</html>