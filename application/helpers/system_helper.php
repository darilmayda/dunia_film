<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


////__________________ for custom_reference _______________
function get($token, $modul )
{
    $url = API_URL . $modul;
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Access-Control-Allow-Origin: *",
            "token: " . $token,
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    $result = json_decode($response, true);
    $httpStatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    if ($httpStatus != 200) {
        print "Error in HTTP status code: $httpStatus\n";
        return null;
    } else {
        return $response;
    }
}


function post($token, $modul, $data, $header, $header2 )
{
    $url = URL_API . $modul;
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_SSL_VERIFYHOST => 0,
		CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Access-Control-Allow-Origin: *",
            "token: " . $token,
             $header, $header2
        ),
        CURLOPT_POSTFIELDS => $data
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    $result = json_decode($response, true);
    $httpStatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    if ($httpStatus != 200) {
        print "Error in HTTP status code: $httpStatus\n";
        return null;
    } else {
        return $response;
    }
}


function put($token, $modul, $data, $header, $header2 )
{
    $url = URL_API . $modul;
    // print_r($url);die();
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_SSL_VERIFYHOST => 0,
		CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "PUT",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Access-Control-Allow-Origin: *",
            "token: " . $token,
             $header, $header2
        ),
        CURLOPT_POSTFIELDS => $data
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    $result = json_decode($response, true);
    $httpStatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    if ($httpStatus != 200) {
        print "Error in HTTP status code: $httpStatus\n";
        return null;
    } else {
        return $response;
    }
}

function delete($token, $modul,$header, $header2)
{
    $url = URL_API . $modul;
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_SSL_VERIFYHOST => 0,
		CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "DELETE",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Access-Control-Allow-Origin: *",
            "token: " . $token,
             $header, $header2
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    $result = json_decode($response, true);
    $httpStatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    if ($httpStatus != 200) {
        print "Error in HTTP status code: $httpStatus\n";
        return null;
    } else {
        return $result;
    }
}

?>
