<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\SideBar\SideBarRepository;
use Illuminate\Http\Request;

class SideBarController extends Controller
{
    //
    private $SideBarRepository;

    public function __construct(SideBarRepository $SideBarRepository)
    {
        $this->SideBarRepository = $SideBarRepository;
    }

    public function getAllMobile(Request $request)
    {
        return $this->SideBarRepository->getAllMobile($request);
    }

    public function createMobile(Request $request)
    {
        return $this->SideBarRepository->createMobile($request);
    }

    public function updateMobile(Request $request)
    {
        return $this->SideBarRepository->updateMobile($request);
    }

    public function deleteMobile(Request $request)
    {
        return $this->SideBarRepository->deleteMobile($request);
    }

    public function getAllDesktop(Request $request)
    {
        return $this->SideBarRepository->getAllDesktop($request);
    }

    public function createDesktop(Request $request)
    {
        return $this->SideBarRepository->createDesktop($request);
    }

    public function updateDesktop(Request $request)
    {
        return $this->SideBarRepository->updateDesktop($request);
    }

    public function deleteDesktop(Request $request)
    {
        return $this->SideBarRepository->deleteDekstop($request);
    }
}
