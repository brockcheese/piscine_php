#!/usr/bin/php
<?php

    function getImgs($html, $url) {
        preg_match_all('/<img[^>]+src="([^"]+)/i', $html, $matches);
        foreach ($matches[1] as $k => $v) {
            $matches[1][$k] = trim($v, "\"");
            if (!preg_match("/^http(s?):\/\//", $matches[1][$k])) {
                if (preg_match("/^\//", $matches[1][$k])) {
                    if ($url[strlen($url) - 1] != '/')
                        $matches[1][$k] = $url."/".$matches[1][$k];
                    else
                        $matches[1][$k] = $url."".$matches[1][$k];
                }
                else
                    $matches[1][$k] = $url."".$matches[1][$k];
            }
		}
		return $matches[1];
    }
    function createFolder($argv) {
        $directory = preg_replace("/.*?\/\//", "", $argv[1]);
        if ($directory[strlen($directory) - 1] != '/')
            $directory .= "/";
		mkdir($directory);
		return($directory);
    }

    function getImgName($img) {
        preg_match("/^.*?([^\/]+)$/", $img, $matches);
        if (substr($matches[1], -1) === "\"")
            return (substr($matches[1], 0, -1));
        return ($matches[1]);
    }
    function downloadImg($imgs, $folder) {
        foreach ($imgs as $img) {
            $curl = curl_init($img);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $rawimg = curl_exec($curl);
            curl_close($curl);
            $fp = fopen($folder."/".getImgName($img),'w');
            fwrite($fp, $rawimg);
            fclose($fp);
        }
    }

    if ($argc > 1 && !empty(($html = file_get_contents("$argv[1]"))))
    {
        $imgs = getImgs($html, $argv[1]);
        $folder = createFolder($argv);
        downloadImg($imgs, $folder);
    }
?>
