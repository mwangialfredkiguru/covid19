<?php
require 'vendor/autoload.php';

function ReturnCovid19Summary()
{
    $url = "https://corona.lmao.ninja/all";
    $client = new GuzzleHttp\Client();
    $res = $client->request('GET', $url);
    $data = $res->getBody()->getContents();
    return $data;
}
function ReturnAllCases()
{
   $url = "https://corona.lmao.ninja/countries";
    $client = new GuzzleHttp\Client();
    $res = $client->request('GET', $url);
    $data = $res->getBody()->getContents();
    return $data;
}

function ReturnCasesByCountryName($CountryName)
{
   $url = "https://corona.lmao.ninja/countries/".$CountryName;
    $client = new GuzzleHttp\Client();
    $res = $client->request('GET', $url);
    $data = $res->getBody()->getContents();
    return $data;
}
function ReturnCasesByCountryID($CountryID)
{
   $url = "https://corona.lmao.ninja/countries/".$CountryID;
    $client = new GuzzleHttp\Client();
    $res = $client->request('GET', $url);
    $data = $res->getBody()->getContents();
    return $data;
}
function ReturnCasesByCountryISO2($CountryISO2)
{
   $url = "https://corona.lmao.ninja/countries/".$CountryISO2;
    $client = new GuzzleHttp\Client();
    $res = $client->request('GET', $url);
    $data = $res->getBody()->getContents();
    return $data;
}
function ReturnCasesByCountryISO3($CountryISO3)
{
   $url = "https://corona.lmao.ninja/countries/".$CountryISO3;
    $client = new GuzzleHttp\Client();
    $res = $client->request('GET', $url);
    $data = $res->getBody()->getContents();
    return $data;
}

//Historical data
function ReturnAllHistoricalData()
{
   $url = "https://corona.lmao.ninja/v2/historical/";
    $client = new GuzzleHttp\Client();
    $res = $client->request('GET', $url);
    $data = $res->getBody()->getContents();
    return $data;
}
function ReturnHistoricalDataByCountry($CountryName)
{
   $url = "https://corona.lmao.ninja/v2/historical/".$CountryName;
    $client = new GuzzleHttp\Client();
    $res = $client->request('GET', $url);
    $data = $res->getBody()->getContents();
    return $data;
}
function ReturnHistoricalDataByCountry1($Info){
  include 'data.php';
  ReturnHistoricalDataBCountry($Info);
}

?>
