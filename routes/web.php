<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\homeController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\portfolioController;
use App\Http\Controllers\singleportfolioController;
use App\Http\Controllers\singleachivementsController;
use App\Http\Controllers\privacypolicyController;
use App\Http\Controllers\termsandconditionController;
use App\Http\Controllers\insertportfolioController;
use Illuminate\Support\Facades\App;
use PharIo\Manifest\Url;



use Spatie\Sitemap\SitemapGenerator;


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




Route::get('/',function () {
    return view('home');
});
Route::get('/', [homeController::class, 'index']);
Route::post('/ajax',[homeController::class, 'index2']);

// terms and conditions
Route::get('/termsandconditions', [termsandconditionController::class, 'index']);

// portfolio
Route::get('/portfoliopage', [portfolioController::class, 'index']);

// single portfolio
Route::get('portfolio/{portfolio_page}', [singleportfolioController::class, 'index']);

// single achivements
Route::get('achivements/{achivements_page}', [singleachivementsController::class, 'index']);

// privacy policy
// Route::get('/privacypolicy', [privacypolicyController::class, 'index']);
Route::get('/privacyPolicy', [privacypolicyController::class, 'index']);

//test
Route::get('/test',function () {
    return view('components.splash-screen');
});

//add portfolio item
Route::get('/insertportfolio', [insertportfolioController::class, 'index']);

Route::post('/addportfolioitem', [insertportfolioController::class, 'insertEntry']);


//sitemap
Route::get('sitemap', function() {

	// create new sitemap object
	$sitemap = App::make('sitemap');

	// set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
	// by default cache is disabled
	$sitemap->setCache('laravel.sitemap', 60);

	// check if there is cached sitemap and build new only if is not
	if (!$sitemap->isCached()) {
		// add item to the sitemap (url, date, priority, freq)
		$sitemap->add(URL::to('/'), '2012-08-25T20:10:00+02:00', '1.0', 'daily');
		$sitemap->add(URL::to('page'), '2012-08-26T12:30:00+02:00', '0.9', 'monthly');

		// add item with translations (url, date, priority, freq, images, title, translations)
		$translations = [
			['language' => 'fr', 'url' => URL::to('pageFr')],
			['language' => 'de', 'url' => URL::to('pageDe')],
			['language' => 'bg', 'url' => URL::to('pageBg')],
		];
		$sitemap->add(URL::to('pageEn'), '2015-06-24T14:30:00+02:00', '0.9', 'monthly', [], null, $translations);

		// add item with images
		$images = [
			['url' => URL::to('images/pic1.jpg'), 'title' => 'Image title', 'caption' => 'Image caption', 'geo_location' => 'Plovdiv, Bulgaria'],
			['url' => URL::to('images/pic2.jpg'), 'title' => 'Image title2', 'caption' => 'Image caption2'],
			['url' => URL::to('images/pic3.jpg'), 'title' => 'Image title3'],
		];
		$sitemap->add(URL::to('post-with-images'), '2015-06-24T14:30:00+02:00', '0.9', 'monthly', $images);

		// get all posts from db
		$posts = DB::table('posts')->orderBy('created_at', 'desc')->get();

		// add every post to the sitemap
		foreach ($posts as $post) {
			$sitemap->add($post->slug, $post->modified, $post->priority, $post->freq);
		}
	}

	// show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
	return $sitemap->render('xml');
});