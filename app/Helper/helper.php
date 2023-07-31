<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

// HOME SLIDER
// https://rest.entitysport.com/v2/competitions?token=[ACCESS_TOKEN]&per_page=30&&paged=1&status=fixture
// https://rest.entitysport.com/v2/competitions?token=[ACCESS_TOKEN]&per_page=30&&paged=1&status=live
// https://rest.entitysport.com/v2/competitions?token=[ACCESS_TOKEN]&per_page=30&&paged=1&status=result

// SEASONS
// https://rest.entitysport.com/v2/seasons/?token=ec471071441bb2ac538a0ff901abd249


// Matches List API provide access to all of our matches.
// https: //rest.entitysport.com/v2/matches/?status=2&token=ec471071441bb2ac538a0ff901abd249

function token()
{
	return 'ec471071441bb2ac538a0ff901abd249';
}

function getSeasons($page = 10)
{
	$url = 'seasons/2021/competitions';

	$response = Http::get(config('services.api') . $url . '?per_page=' . $page . '&token=' . token())
		->json();

	return $response['response']['items'];
}

function getSeasonsDetails($cid)
{
	$response = Http::get(config('services.api') . 'competitions/' . $cid . '/matches?token=' . token())->json();

	return $response['response']['items'];
}

function getSeasonSquads($cid)
{
	$response = Http::get(config('services.api') . 'competitions/' . $cid . '/squads?token=' . token())->json();

	return $response['response']['squads'];
}

function getSeasonStats($cid, $type = null, $page = 1)
{
	$response = Http::get(config('services.api') . 'competitions/' . $cid . '/stats/' . $type . '?per_page=' . $page . '.&token=' . token())->json();

	return $response['response'];
}

function getSeasonTeams($cid)
{
	$response = Http::get(config('services.api') . 'competitions/' . $cid . '/teams?&token=' . token())->json();

	return $response['response'];
}

function getMatch()
{
	$response = Http::get(config('services.api') . 'matches/?status=2&format=1,2,3,4&token=' . token())->json();

	return $response['response']['items'];
}

function getMatchDetails($matchId)
{
	$response = Http::get(config('services.api') . "matches/" . $matchId . "/info?token=" . token())->json();

	// $response = Http::get('https://rest.entitysport.com/exchange/matches/'.$matchId.'/info?token='.token())->json();

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
}

function getCompetitionsMatches($matchId, $ppage = 1)
{
	$response = Http::get(config('services.api') . "competitions/" . $matchId . "/matches?&per_page=" . $ppage . "&token=" . token())->json();

	return $response['response']['items'][0];
}

function uploadImage($image, $upath = '', $prefix = '')
{
	$path = ($upath == '') ? 'images/' : $upath;

	$storepath = Storage::disk('public')->path($path);

	if (!is_dir($storepath)) {

		File::makeDirectory($storepath, 0777, true);
	}

	$imageName = time() . '-' . Str::random(5) . '.' . $image->extension();

	$image->storeAs('public/' . $path, $imageName);

	return $path . '/' . $imageName;
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

function perPage()
{
	return 10;
}

function ordinal($number)
{
	$ends = array('th', 'st', 'nd', 'rd', 'th', 'th', 'th', 'th', 'th', 'th');
	if ((($number % 100) >= 11) && (($number % 100) <= 13))
		return $number . 'th';
	else
		return $number . $ends[$number % 10];
}

function responseMessage($name){

	switch ($name) {
		case (Session::has($name.'.success')):
			return '<div class="alert alert-green">'.Session::get($name.'.success').'</div>';
			break;
		case (Session::has($name.'.warning')):
			return '<div class="alert alert-warning">'.Session::get($name.'.warning').'</div>';
			break;
		case (Session::has($name.'.danger')):
			return '<div class="alert alert-warning">'.Session::get($name.'.danger').'</div>';
			break;
	}
}