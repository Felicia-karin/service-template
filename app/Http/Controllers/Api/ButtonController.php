<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\Button\ButtonRepository;
use Illuminate\Http\Request;

class ButtonController extends Controller
{
    //
    private $ButtonRepository;

    public function __construct(ButtonRepository $ButtonRepository)
    {
        $this->ButtonRepository = $ButtonRepository;
    }

    public function getAllMobile(Request $request)
    {
        return $this->ButtonRepository->getAllMobile($request);
    }

    public function createMobile(Request $request)
    {
        return $this->ButtonRepository->createMobile($request);
    }

    public function updateMobile(Request $request)
    {
        return $this->ButtonRepository->updateMobile($request);
    }

    public function deleteMobile(Request $request)
    {
        return $this->ButtonRepository->deleteMobile($request);
    }

    public function getAllDesktop(Request $request)
    {
        return $this->ButtonRepository->getAllDesktop($request);
    }

    public function createDesktop(Request $request)
    {
        return $this->ButtonRepository->createDesktop($request);
    }

    public function updateDesktop(Request $request)
    {
        return $this->ButtonRepository->updateDesktop($request);
    }

    public function deleteDesktop(Request $request)
    {
        return $this->ButtonRepository->deleteDekstop($request);
    }
}
