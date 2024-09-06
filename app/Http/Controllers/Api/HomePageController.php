<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\HomePage\HomePageRepository;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //
    private $HomePageRepository;

    public function __construct(HomePageRepository $HomePageRepository)
    {
        $this->HomePageRepository = $HomePageRepository;
    }

    public function getAllMobile(Request $request)
    {
        return $this->HomePageRepository->getAllMobile($request);
    }

    public function createMobile(Request $request)
    {
        return $this->HomePageRepository->createMobile($request);
    }

    public function updateMobile(Request $request)
    {
        return $this->HomePageRepository->updateMobile($request);
    }

    public function deleteMobile(Request $request)
    {
        return $this->HomePageRepository->deleteMobile($request);
    }

    public function getAllDesktop(Request $request)
    {
        return $this->HomePageRepository->getAllDesktop($request);
    }

    public function createDesktop(Request $request)
    {
        return $this->HomePageRepository->createDesktop($request);
    }

    public function updateDesktop(Request $request)
    {
        return $this->HomePageRepository->updateDesktop($request);
    }

    public function deleteDesktop(Request $request)
    {
        return $this->HomePageRepository->deleteDekstop($request);
    }
}
