<?php

if($_POST['page']=="1"){
    $offre1 = $_POST['offre1'];
    $offre2 = $_POST['offre2'];
    $offre3 = $_POST['offre3'];
    $offre4 = $_POST['offre4'];
    $comment = $_POST['comment'];

    $fp =  file('assets/responses.csv');
    $id += count($fp);

    $responses = array($id,$offre1,$offre2,$offre3,$offre4,date('d-m-Y h:i:s'),$comment);

    $handle = fopen("assets/responses.csv", "a");
    fprintf($handle, chr(0xEF).chr(0xBB).chr(0xBF));
    fputcsv($handle, $responses,";");
    fclose($handle);
}


if($_POST['page']=="2"){
    $offre1 = $_POST['offre1'];
    $offre2 = $_POST['offre2'];
    $offre3 = $_POST['offre3'];
    $offre4 = $_POST['offre4'];
    $offre5 = $_POST['offre5'];
    $offre6 = $_POST['offre6'];
    $offre7 = $_POST['offre7'];
    $offre8 = $_POST['offre8'];
    $offre9 = $_POST['offre9'];
    $comment = $_POST['comment'];

    $fp =  file('assets/responses2.csv');
    $id += count($fp);

    $responses = array($id,$offre1,$offre2,$offre3,$offre4,$offre5,$offre6,$offre7,$offre8,$offre9,date('d-m-Y h:i:s'),$comment);

    $handle = fopen("assets/responses2.csv", "a");
    fprintf($handle, chr(0xEF).chr(0xBB).chr(0xBF));
    fputcsv($handle, $responses,";");
    fclose($handle);
}

if($_POST['page']=="3"){
    $offre1 = $_POST['offre1'];
    $offre2 = $_POST['offre2'];
    $offre3 = $_POST['offre3'];
    $offre4 = $_POST['offre4'];
    $offre5 = $_POST['offre5'];
    $offre6 = $_POST['offre6'];
    $offre7 = $_POST['offre7'];
    $comment = $_POST['comment'];

    $fp =  file('assets/responses3.csv');
    $id += count($fp);

    $responses = array($id,$offre1,$offre2,$offre3,$offre4,$offre5,$offre6,$offre7,date('d-m-Y h:i:s'),$comment);

    $handle = fopen("assets/responses3.csv", "a");
    fprintf($handle, chr(0xEF).chr(0xBB).chr(0xBF));
    fputcsv($handle, $responses,";");
    fclose($handle);
}


if($_POST['page']=="4"){
    $offre1 = $_POST['offre1'];
    $offre2 = $_POST['offre2'];
    $offre3 = $_POST['offre3'];
    $offre4 = $_POST['offre4'];
    $offre5 = $_POST['offre5'];
    $offre6 = $_POST['offre6'];
    $offre7 = $_POST['offre7'];
    $offre8 = $_POST['offre8'];
    $offre9 = $_POST['offre9'];
    $offre10 = $_POST['offre10'];
    $offre11 = $_POST['offre11'];
    $offre12 = $_POST['offre12'];
    $offre13 = $_POST['offre13'];
    $comment = $_POST['comment'];

    $fp =  file('assets/responses4.csv');
    $id += count($fp);

    $responses = array($id,$offre1,$offre2,$offre3,$offre4,$offre5,
        $offre6,$offre7,$offre8,$offre9,$offre10,$offre11,$offre12,$offre13,date('d-m-Y h:i:s'),$comment);

    $handle = fopen("assets/responses4.csv", "a");
    fprintf($handle, chr(0xEF).chr(0xBB).chr(0xBF));
    fputcsv($handle, $responses,";");
    fclose($handle);
}