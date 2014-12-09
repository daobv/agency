<?php
 function downloadFile($output_filename,$host){

     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $host);
     curl_setopt($ch, CURLOPT_VERBOSE, 1);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_AUTOREFERER, false);
     curl_setopt($ch, CURLOPT_REFERER, "http://www.xcontest.org");
     curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
     curl_setopt($ch, CURLOPT_HEADER, 0);
     $result = curl_exec($ch);
     curl_close($ch);
     header('Expires: 0'); // no cache
     header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
     header('Last-Modified: ' . gmdate('D, d M Y H:i:s', time()) . ' GMT');
     header('Cache-Control: private', false);
     header('Content-Type: application/force-download');
     header('Content-Disposition: attachment; filename="' . basename($output_filename) . '"');
     header('Content-Transfer-Encoding: binary');
     header('Content-Length: ' . strlen($result)); // provide file size
     header('Connection: close');
 }