<?php
// Load library 
include_once 'HtmlToDoc.php';  
$htd = new HTML_TO_DOC();
// $path = "D:/wampp64/www/convert-html-to-doc/html";
// $dir = new DirectoryIterator($path);
// $i=1;
// $name = array();
// $path_doc1 = "D:/wampp64/www/convert-html-to-doc/sample";
// foreach ($dir as $fileinfo) {
//     if (!$fileinfo->isDot()) {
//         $name[$i] = $fileinfo->getFilename();
//         $i++;         
//     }
// }
$htd->createDoc("D:/wampp64/www/sample/html/search-r-d/index.html","index.doc");
$j=1;
// for($j=1;$j<=count($name);$j++)
// {
//     $path1 = $path . '/' . $name[$j];
//     $dir1 = new DirectoryIterator($path1);
//     foreach ($dir1 as $fileinfo) 
//     {
//         if (!$fileinfo->isDot()) 
//         {
//             if($fileinfo->getFilename() == "index.html")
//             {
//                 $html = $path1. '/' .  $fileinfo->getFilename();
//                 $file = fopen($html, "r");

//                 //Output lines until EOF is reached
//                 while(! feof($file)) {
//                 $line = fgets($file);
//                 echo $line. "<br>";
//                 }
        
//                 fclose($file);
//                 $htd->createDoc($line,$name[$j]);
//             }
//         }
//     }
//}
?>