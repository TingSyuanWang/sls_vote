<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TeamController@index')->name('homepage');
Route::get('pagenotfound', ['as' => 'notfound', 'uses' => 'HomeController@pagenotfound']);

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/redirect', 'SocialAuthFacebookController@redirect')->name('facebookLogin');;
Route::get('/callback', 'SocialAuthFacebookController@callback');

//Route::get('/home', 'HomeController@index')->name('home');

// Team Route
Route::get('/team1', 'TeamController@team1')->name('team1');
Route::get('/vote/team1', 'VoteController@voteTeam1')->name('voteTeam1');

Route::get('/team2', 'TeamController@team2')->name('team2');
Route::get('/vote/team2', 'VoteController@voteTeam2')->name('voteTeam2');

Route::get('/team3', 'TeamController@team3')->name('team3');
Route::get('/vote/team3', 'VoteController@voteTeam3')->name('voteTeam3');

Route::get('/team4', 'TeamController@team4')->name('team4');
Route::get('/vote/team4', 'VoteController@voteTeam4')->name('voteTeam4');

Route::get('/team5', 'TeamController@team5')->name('team5');
Route::get('/vote/team5', 'VoteController@voteTeam5')->name('voteTeam5');

Route::get('/team6', 'TeamController@team6')->name('team6');
Route::get('/vote/team6', 'VoteController@voteTeam6')->name('voteTeam6');

Route::get('/team7', 'TeamController@team7')->name('team7');
Route::get('/vote/team7', 'VoteController@voteTeam7')->name('voteTeam7');

