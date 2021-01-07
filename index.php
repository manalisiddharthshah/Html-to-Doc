<?php
// Load library 
include_once 'HtmlToDoc.php';  
$htd = new HTML_TO_DOC();
$path = "D:/Google1";
$dir = new DirectoryIterator($path);
$i=1;
$name = array();
$path_doc1 = "D:/Google_Doc";
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
        $name[$i] = $fileinfo->getFilename();
        mkdir($path_doc1 . "/" .$name[$i], 0777, true);
        $i++;         
    }
}
$j=1;
for($j=1;$j<=count($name);$j++)
{
    print_r("<h1>" . $j . "=>" . $name[$j] . "</h1><br>");
    $path1 = "D:/Google1/" . $name[$j];
    $path_doc1 = "D:/Google_Doc/" . $name[$j];
    //print_r("<h1>Path1 :" . $path1 . "</h1>");
    $dir1 = new DirectoryIterator($path1);
    foreach ($dir1 as $fileinfo) {
        if (!$fileinfo->isDot()) {
            // print_r("<t></t> -> " . $fileinfo->getFilename());
            // print_r("<t></t> -> -> " . $fileinfo->getExtension());
            if($fileinfo->getFilename() == "index.html")
            {
                print_r($fileinfo->getFilename() . "-------------------yes-----------------------");
                $html = $path1. '/' .  $fileinfo->getFilename();
                $file = fopen($html, "r");
                //Output lines until EOF is reached
                while(! feof($file)) {
                $line = fgets($file);
                //echo $line. "<br>";
                }
        
                fclose($file);
                $htd->createDoc($line,$name[$j]);
                copy("D:/wampp64/www/convert-html-to-doc" . '/' .  $name[$j] . '.doc',$path_doc1 . '/' . 'index.doc');
            }
            else if($fileinfo->getExtension() == "html")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "log")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "png")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "jpg")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "pptx")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "docx")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "zip")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "xlsx")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "svg")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "xls")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "msg")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "pem")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "txt")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "pdf")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "gif")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "vsd")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "sql")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "doc")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "JPG")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "PNG")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "xml")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "js")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "csv")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "rtf")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "php")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "gz")
            {
                //php.tar.gz
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "7z")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "rar")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "jmx")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "cnf")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "ktr")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "psd")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "sh")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "jsp")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "json")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "db")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "ppt")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else if($fileinfo->getExtension() == "adsklib")
            {
                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                copy($path1 . '/' .  $fileinfo->getFilename(),$path_doc1 . '/' . $fileinfo->getFilename());
            }
            else
            {
                print_r("<t></t> => " . $fileinfo->getFilename() . "<br>");
                $second_branch = $fileinfo->getFilename();
                $path2 = $path1 . "/" . $fileinfo->getFilename();
                $path_doc2 = $path_doc1 . "/" . $fileinfo->getFilename();
                mkdir($path_doc2 , 0777, true);
                //print_r("<h2>Path2 :" . $path2 . "</h2>");
                $dir2 = new DirectoryIterator($path2);
                foreach ($dir2 as $fileinfo) {
                    if (!$fileinfo->isDot()) {
                        // print_r("<t></t> -> " . $fileinfo->getFilename());
                        // print_r("<t></t> -> -> " . $fileinfo->getExtension());
                        if($fileinfo->getFilename() == "index.html")
                        {
                            print_r($fileinfo->getFilename() . "-------------------yes-----------------------");
                            $html = $path2. '/' .  $fileinfo->getFilename();
                            $file = fopen($html, "r");
                            //Output lines until EOF is reached
                            while(! feof($file)) {
                            $line = fgets($file);
                            //echo $line. "<br>";
                            }
                    
                            fclose($file);
                            $htd->createDoc($line,$second_branch);
                            copy("D:/wampp64/www/convert-html-to-doc" . '/' .  $second_branch . '.doc',$path_doc2 . '/' . 'index.doc');
                        }
                        else if($fileinfo->getExtension() == "html")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "log")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "png")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "jpg")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "pptx")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "docx")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "zip")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "xlsx")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "svg")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "xls")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "msg")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "pem")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "txt")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "pdf")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "gif")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "vsd")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "sql")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "doc")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "JPG")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "PNG")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "xml")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "js")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "csv")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "rtf")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "php")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "gz")
                        {
                            //php.tar.gz
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "7z")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "rar")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "jmx")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "cnf")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "ktr")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "psd")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "sh")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "jsp")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "json")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "db")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "ppt")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else if($fileinfo->getExtension() == "adsklib")
                        {
                            print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                            copy($path2 . '/' .  $fileinfo->getFilename(),$path_doc2 . '/' . $fileinfo->getFilename());
                        }
                        else
                        {
                            print_r("<t></t> => => " . $fileinfo->getFilename() . "<br>");
                            $path3 = $path2 . "/" . $fileinfo->getFilename();
                            $path_doc3 = $path_doc2 . "/" . $fileinfo->getFilename();
                            mkdir($path_doc3 , 0777, true);
                            $third_branch = $fileinfo->getFilename();
                            //print_r("<h3>Path3 :" . $path3 . "</h3>");
                            $dir3 = new DirectoryIterator($path3);
                            foreach ($dir3 as $fileinfo) {
                                if (!$fileinfo->isDot()) {
                                    // print_r("<t></t> -> " . $fileinfo->getFilename());
                                    // print_r("<t></t> -> -> " . $fileinfo->getExtension());
                                    if($fileinfo->getFilename() == "index.html")
                                    {
                                        print_r($fileinfo->getFilename() . "-------------------yes-----------------------");
                                        $html = $path3. '/' .  $fileinfo->getFilename();
                                        $file = fopen($html, "r");
                                        //Output lines until EOF is reached
                                        while(! feof($file)) {
                                        $line = fgets($file);
                                       // echo $line. "<br>";
                                        }
                                
                                        fclose($file);
                                        $htd->createDoc($line,$third_branch);
                                        copy("D:/wampp64/www/convert-html-to-doc" . '/' .  $third_branch . '.doc',$path_doc3 . '/' . 'index.doc');
                                    }
                                    else if($fileinfo->getExtension() == "html")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "log")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "png")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "jpg")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "pptx")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "docx")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "zip")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "xlsx")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "svg")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "xls")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "msg")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "pem")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "txt")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "pdf")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "gif")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "vsd")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "sql")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "doc")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "JPG")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "PNG")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "xml")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "js")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "csv")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "rtf")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "php")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "gz")
                                    {
                                        //php.tar.gz
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "7z")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "rar")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "jmx")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "cnf")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "ktr")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "psd")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "sh")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "jsp")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "json")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "db")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "ppt")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else if($fileinfo->getExtension() == "adsklib")
                                    {
                                        print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                        copy($path3 . '/' .  $fileinfo->getFilename(),$path_doc3 . '/' . $fileinfo->getFilename());
                                    }
                                    else
                                    {
                                        print_r("<t></t> => => => " . $fileinfo->getFilename() . "<br>");
                                        $fourth_branch = $fileinfo->getFilename();
                                        $path4 = $path3 . "/" . $fileinfo->getFilename();
                                        $path_doc4 = $path_doc3 . "/" . $fileinfo->getFilename();
                                        mkdir($path_doc4 , 0777, true);
                                        //print_r("<h4>Path4 :" . $path4 . "</h4>");
                                        $dir4 = new DirectoryIterator($path4);
                                        foreach ($dir4 as $fileinfo) {
                                            if (!$fileinfo->isDot()) {
                                                // print_r("<t></t> -> " . $fileinfo->getFilename());
                                                // print_r("<t></t> -> -> " . $fileinfo->getExtension());
                                                if($fileinfo->getFilename() == "index.html")
                                                {
                                                    print_r($fileinfo->getFilename() . "-------------------yes-----------------------");
                                                    $html = $path4. '/' .  $fileinfo->getFilename();
                                                    $file = fopen($html, "r");
                                                    //Output lines until EOF is reached
                                                    while(! feof($file)) {
                                                    $line = fgets($file);
                                                    //echo $line. "<br>";
                                                    }
                                            
                                                    fclose($file);
                                                    $htd->createDoc($line,$fourth_branch);
                                                    copy("D:/wampp64/www/convert-html-to-doc" . '/' .  $fourth_branch . '.doc',$path_doc4 . '/' . 'index.doc');
                                                }
                                                else if($fileinfo->getExtension() == "html")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "log")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "png")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "jpg")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "pptx")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "docx")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "zip")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "xlsx")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "svg")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "xls")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "msg")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "pem")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "txt")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "pdf")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "gif")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "vsd")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "sql")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "doc")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "JPG")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "PNG")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "xml")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "js")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "csv")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "rtf")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "php")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "gz")
                                                {
                                                    //php.tar.gz
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "7z")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "rar")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "jmx")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "cnf")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "ktr")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "psd")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "sh")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "jsp")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "json")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "db")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "ppt")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else if($fileinfo->getExtension() == "adsklib")
                                                {
                                                    print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                    copy($path4 . '/' .  $fileinfo->getFilename(),$path_doc4 . '/' . $fileinfo->getFilename());
                                                }
                                                else
                                                {
                                                    print_r("<t></t> => => => => " . $fileinfo->getFilename() . "<br>");
                                                    $path5 = $path4 . "/" . $fileinfo->getFilename();
                                                    $path_doc5 = $path_doc4 . "/" . $fileinfo->getFilename();
                                                    $fifth_branch = $fileinfo->getFilename();
                                                    mkdir($path_doc5 , 0777, true);
                                                    //print_r("<h5>Path5 :" . $path5 . "</h5>");
                                                    $dir5 = new DirectoryIterator($path5);
                                                    foreach ($dir5 as $fileinfo) {
                                                        if (!$fileinfo->isDot()) {
                                                            print_r("<t></t> -> " . $fileinfo->getFilename());
                                                            print_r("<t></t> -> -> " . $fileinfo->getExtension());
                                                            if($fileinfo->getFilename() == "index.html")
                                                            {
                                                                print_r($fileinfo->getFilename() . "-------------------yes-----------------------");
                                                                $html = $path5. '/' .  $fileinfo->getFilename();
                                                                $file = fopen($html, "r");
                                                                //Output lines until EOF is reached
                                                                while(! feof($file)) {
                                                                $line = fgets($file);
                                                                //echo $line. "<br>";
                                                                }
                                                        
                                                                fclose($file);
                                                                $htd->createDoc($line,$fifth_branch);
                                                                copy("D:/wampp64/www/convert-html-to-doc" . '/' .  $fifth_branch . '.doc',$path_doc5 . '/' . 'index.doc');
                                                            }
                                                            else if($fileinfo->getExtension() == "html")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "log")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "png")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "jpg")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "pptx")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "docx")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "zip")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "xlsx")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "svg")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "xls")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "msg")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "pem")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "txt")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "pdf")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "gif")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "vsd")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "sql")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "doc")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "JPG")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "PNG")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "xml")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "js")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "csv")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "rtf")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "php")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "gz")
                                                            {
                                                                //php.tar.gz
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "7z")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "rar")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "jmx")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "cnf")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "ktr")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "psd")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "sh")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "jsp")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "json")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "db")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "ppt")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else if($fileinfo->getExtension() == "adsklib")
                                                            {
                                                                print_r($fileinfo->getFilename() . " -> -> " . $fileinfo->getExtension());
                                                                copy($path5 . '/' .  $fileinfo->getFilename(),$path_doc5 . '/' . $fileinfo->getFilename());
                                                            }
                                                            else
                                                            {
                                                                print_r("<t></t> => => => => " . $fileinfo->getFilename());
                                                            }
                                                            print_r("<br>");    
                                                        }
                                                    }
                                                }
                                                print_r("<br>");    
                                            }
                                        }
                                    }
                                    print_r("<br>");    
                                }
                            }
                        }
                        print_r("<br>");    
                    }
                }
            }
            print_r("<br>");    
        }
    }
}
?>