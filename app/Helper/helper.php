<?php

use Illuminate\Support\Facades\Http;

function token(){

    return 'ec471071441bb2ac538a0ff901abd249';
}

function getSeasons($url){

    $response = Http::get(config('services.api').$url.'?token='.token())
        ->json();
    
    return $response['response']['items'];
}

function getSeasonsDetailsUrl($path){

    return config('services.api').$path.'?token='.token();
}

function getSeasonsDetails($url){

    return Http::get($url)->json();
}

function getMatch(){

    $response = Http::get(config('services.api').'matches/?status=2&format=1,2,3,4&token='.token())->json();

    return $response['response']['items'];
}