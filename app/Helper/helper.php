<?php

use Illuminate\Support\Facades\Http;

function token()
{

	return 'ec471071441bb2ac538a0ff901abd249';
}

function getSeasons()
{
	$url = 'seasons/2021/competitions';
	
	$response = Http::get(config('services.api') . $url . '?token=' . token())
	->json();
	
	return $response['response']['items'];
}

function seasonWithSession(){
	
}

function getSeasonsDetailsUrl($path)
{
	return config('services.api') . $path . '?token=' . token();
}

function getSeasonsDetails($url)
{
	return Http::get($url)->json();
}

function getMatch()
{
	$response = Http::get(config('services.api') . 'matches/?status=2&format=1,2,3,4&token=' . token())->json();

	return $response['response']['items'];
}

function getMatchDetails($matchId)
{

	$response = Http::get(config('services.api') . "matches/" . $matchId . "/info?token=" . token())->json();

	return $response['response'];
}

function getIccRanking()
{

	$response = Http::get(config('services.api') . "iccranks?token=" . token())->json();

	return $response;
}

function getTopTeam()
{

	return  Http::get(config('services.api') . "teams&format=1,2,3,4&token=" . token())->json();

	// return $response['response'];
}

function getCompetitionsMatches($matchId, $ppage = 1)
{

	$response = Http::get(config('services.api') . "competitions/" . $matchId . "/matches?&per_page=" . $ppage . "&token=" . token())->json();

	return $response['response']['items'][0];
}


function uploadImage($image, $upath = '', $prefix = '')
{
	if ($image != null || isset($image)) {

		$path = ($upath == '') ? 'images/' : $upath;

		$storepath = Storage::disk('public')->path($path);

		if (!is_dir($storepath)) {

			File::makeDirectory($storepath, 0777, true);
		}

		$imageName = time() . '-' . Str::random(5) . '.' . $image->extension();

		$image->storeAs('public/' . $path, $imageName);

		return $path . '/' . $imageName;
	}

	return null;
}

function getImageUrl($image, $prefix = null)
{

	if ($image != null) {

		return Storage::disk('public')->url($image);
	}

	return null;
}

function deleteImage($imageUrl)
{

	if ($imageUrl != null) {

		if (Storage::disk('public')->exists($imageUrl)) {

			Storage::disk('public')->delete($imageUrl);

			return true;
		}
	}

	return false;
}
