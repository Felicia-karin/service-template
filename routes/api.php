<?php

use App\Http\Controllers\Api\AboutUsController;
use App\Http\Controllers\Api\ButtonController;
use App\Http\Controllers\Api\HomePageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TemplateController;
use App\Http\Controllers\Api\SideBarController;
use App\Http\Controllers\Api\TermAndCondition;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('secret.key')->group(function () {
    Route::prefix('templates')->group(function () {
        //Mobile Template
        Route::get('/index-primary-mobile', [TemplateController::class, 'getPrimaryMobile']);
        Route::post('/create-primary-mobile', [TemplateController::class, 'createPrimaryMobile']);
        Route::post('/update-primary-mobile', [TemplateController::class, 'updatePrimaryMobile']);

        Route::get('/index-secondary-mobile', [TemplateController::class, 'getSecondaryMobile']);
        Route::post('/create-secondary-mobile', [TemplateController::class, 'createSecondaryMobile']);
        Route::post('/update-secondary-mobile', [TemplateController::class, 'updateSecondaryMobile']);

        //Desktop Template
        Route::get('/index-primary-desktop', [TemplateController::class, 'getPrimaryDesktop']);
        Route::post('/create-primary-desktop', [TemplateController::class, 'createPrimaryDesktop']);
        Route::post('/update-primary-desktop', [TemplateController::class, 'updatePrimaryDesktop']);

        Route::get('/index-secondary-desktop', [TemplateController::class, 'getSecondaryDesktop']);
        Route::post('/create-secondary-desktop', [TemplateController::class, 'createSecondaryDesktop']);
        Route::post('/update-secondary-desktop', [TemplateController::class, 'updateSecondaryDesktop']);
    });

    Route::prefix('home-page')->group(function () {
        //Mobile Homepage
        Route::get('/index-mobile', [HomePageController::class, 'getAllMobile']);
        Route::post('/create-mobile', [HomePageController::class, 'createMobile']);
        Route::post('/update-mobile', [HomePageController::class, 'updateMobile']);
        Route::post('/delete-mobile', [HomePageController::class, 'deleteMobile']);

        //Desktop Homepage
        Route::get('/index-desktop', [HomePageController::class, 'getAllDesktop']);
        Route::post('/create-desktop', [HomePageController::class, 'createDekstop']);
        Route::post('/update-desktop', [HomePageController::class, 'updateDesktop']);
        Route::post('/delete-desktop', [HomePageController::class, 'deleteDesktop']);
    });

    Route::prefix('button')->group(function () {
        //Mobile Button
        Route::get('/index-mobile', [ButtonController::class, 'getAllMobile']);
        Route::post('/create-mobile', [ButtonController::class, 'createMobile']);
        Route::post('/update-mobile', [ButtonController::class, 'updateMobile']);
        Route::post('/delete-mobile', [ButtonController::class, 'deleteMobile']);

        //Desktop Button
        Route::get('/index-desktop', [ButtonController::class, 'getAllDesktop']);
        Route::post('/create-desktop', [ButtonController::class, 'createDesktop']);
        Route::post('/update-desktop', [ButtonController::class, 'updateDesktop']);
        Route::post('/delete-desktop', [ButtonController::class, 'deleteDesktop']);
    });

    Route::prefix('side-bar')->group(function () {
        //Mobile SideBar
        Route::get('/index-mobile', [SideBarController::class, 'getAllMobile']);
        Route::post('/create-mobile', [SideBarController::class, 'createMobile']);
        Route::post('/update-mobile', [SideBarController::class, 'updateMobile']);
        Route::post('/delete-mobile', [SideBarController::class, 'deleteMobile']);

        //Desktop SideBar
        Route::get('/index-desktop', [SideBarController::class, 'getAllDesktop']);
        Route::post('/create-desktop', [SideBarController::class, 'createDesktop']);
        Route::post('/update-desktop', [SideBarController::class, 'updateDesktop']);
        Route::post('/delete-desktop', [SideBarController::class, 'deleteDesktop']);
    });

    Route::prefix('about-us')->group(function () {
        //Mobile AboutUs
        Route::get('/index-mobile', [AboutUsController::class, 'getAllMobile']);
        Route::post('/create-mobile', [AboutUsController::class, 'createMobile']);
        Route::post('/update-mobile', [AboutUsController::class, 'updateMobile']);
        Route::post('/delete-mobile', [AboutUsController::class, 'deleteMobile']);

        //Desktop AboutUs
        Route::get('/index-desktop', [AboutUsController::class, 'getAllDesktop']);
        Route::get('/create-desktop', [AboutUsController::class, 'createDekstop']);
        Route::get('/update-desktop', [AboutUsController::class, 'updateDesktop']);
        Route::get('/delete-desktop', [AboutUsController::class, 'deleteDesktop']);
    });

    Route::prefix('pop-up')->group(function () {
        Route::get('/index-mobile', [TermAndCondition::class, 'getAllMobile']);
        Route::post('/create-mobile', [TermAndCondition::class, 'createMobile']);
        Route::post('/update-mobile', [TermAndCondition::class, 'updateMobile']);
        Route::post('/delete-mobile', [TermAndCondition::class, 'deleteMobile']);

        Route::get('/index-desktop', [TermAndCondition::class, 'getAllDesktop']);
        Route::get('/create-desktop', [TermAndCondition::class, 'createDekstop']);
        Route::get('/update-desktop', [TermAndCondition::class, 'updateDesktop']);
        Route::get('/delete-desktop', [TermAndCondition::class, 'deleteDesktop']);
    });

});
