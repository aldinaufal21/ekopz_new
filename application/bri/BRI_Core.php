<?php

namespace BRI;

class BRI_Core
{
    public $secret;
    public $id;
    public $timestamp;
    public $token;

    public function __construct($secret, $id) {
        $this->secret = $secret;
        $this->id = $id;
        $this->timestamp = gmdate("Y-m-d\TH:i:s.000\Z");
        $this->token = $this->generateToken();
    }

    public function generateToken()
    {
        $url ="https://sandbox.partner.api.bri.co.id/oauth/client_credential/accesstoken?grant_type=client_credentials";
        $id = $this->id;
        $secret = $this->secret;
        $data = "client_id=$id&client_secret=$secret";
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  //for updating we have to use PUT method.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $json = json_decode($result, true);
        $token = $json['access_token'];

        return $token;
    }

    public function generateSignature($path, $verb, $body)
    {
        $timestamp = $this->timestamp;
        $token = $this->token;
        $payload = "path=$path&verb=$verb&token=Bearer $token&timestamp=$timestamp&body=$body";

        $signPayload = hash_hmac('sha256', $payload, $this->secret, true);
        $base64sign = base64_encode($signPayload);

        return $base64sign;
    }

    public function requestHeader($path, $verb, $payload)
    {
        $base64sign = $this->generateSignature($path, $verb, $payload);

        $header = array();
        if ($verb === 'GET') {
            $header = array(
                "Authorization:Bearer " . $this->token,
                "BRI-Timestamp:" . $this->timestamp,
                "BRI-Signature:" . $base64sign,
            );
        } else {
            $header = array(
                "Content-Type:"."application/json",
                "Authorization:Bearer " . $this->token,
                "BRI-Timestamp:" . $this->timestamp,
                "BRI-Signature:" . $base64sign,
            );
        }

        return $header;
    }

    public function curlIn($verb, $urlPost, $request_headers, $payload = null)
    {
        $chPost = curl_init();

        curl_setopt($chPost, CURLOPT_URL, $urlPost);
        curl_setopt($chPost, CURLOPT_HTTPHEADER, $request_headers);
        curl_setopt($chPost, CURLINFO_HEADER_OUT, true);
        curl_setopt($chPost, CURLOPT_RETURNTRANSFER, true);

        if ($verb === 'POST') {
            curl_setopt($chPost, CURLOPT_POSTFIELDS, $payload);
        }

        $resultPost = curl_exec($chPost);
        $httpCodePost = curl_getinfo($chPost, CURLINFO_HTTP_CODE);

        curl_close($chPost);

        return $resultPost;
    }
}
