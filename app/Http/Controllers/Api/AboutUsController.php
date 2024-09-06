<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\AboutUs\AboutUsRepository;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //

    private $AboutUsRepository;

    public function __construct(AboutUsRepository $AboutUsRepository)
    {
        $this->AboutUsRepository = $AboutUsRepository;
    }

    public function getAllMobile(Request $request)
    {
        return $this->AboutUsRepository->getAllMobile($request);
    }

    public function createMobile(Request $request)
    {
        return $this->AboutUsRepository->createMobile($request);
    }

    public function updateMobile(Request $request)
    {
        return $this->AboutUsRepository->updateMobile($request);
    }

    public function deleteMobile(Request $request)
    {
        return $this->AboutUsRepository->deleteMobile($request);
    }

    public function getAllDesktop(Request $request)
    {
        return $this->AboutUsRepository->getAllDesktop($request);
    }

    public function createDesktop(Request $request)
    {
        return $this->AboutUsRepository->createDesktop($request);
    }

    public function updateDesktop(Request $request)
    {
        return $this->AboutUsRepository->updateDesktop($request);
    }

    public function deleteDesktop(Request $request)
    {
        return $this->AboutUsRepository->deleteDekstop($request);
    }
}
