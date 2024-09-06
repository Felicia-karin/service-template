<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\Template\TemplateRepository;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    private $TemplateRepository;

    public function __construct(TemplateRepository $TemplateRepository)
    {
        $this->TemplateRepository = $TemplateRepository;
    }

    //Mobile Controller
    public function getPrimaryMobile(Request $request)
    {
        return $this->TemplateRepository->getAllPrimaryMobile($request);
    }

    public function createPrimaryMobile(Request $request)
    {
        return $this->TemplateRepository->createPrimaryMobile($request);

    }

    public function updatePrimaryMobile(Request $request)
    {
        return $this->TemplateRepository->updatePrimaryMobile($request);
    }

    public function getSecondaryMobile(Request $request)
    {
        return $this->TemplateRepository->getAllSecondaryMobile($request);

    }

    public function createSecondaryMobile(Request $request)
    {
    return $this->TemplateRepository->createSecondaryMobile($request);

    }

    public function updateSecondaryMobile(Request $request)
    {
        return $this->TemplateRepository->updateSecondaryMobile($request);
    }

    //Desktop Controller

    public function getPrimaryDesktop(Request $request)
    {
        return $this->TemplateRepository->getAllPrimaryDesktop($request);
    }

    public function createPrimaryDesktop(Request $request)
    {
        return $this->TemplateRepository->createPrimaryDesktop($request);
    }

    public function updatePrimaryDesktop(Request $request)
    {
        return $this->TemplateRepository->updatePrimaryDesktop($request);
    }

    public function getSecondaryDesktop(Request $request)
    {
        return $this->TemplateRepository->getAllPrimaryDesktop($request);
    }

    public function createSecondaryDesktop(Request $request)
    {
        return $this->TemplateRepository->createSecondaryDesktop($request);
    }

    public function updateSecondaryDesktop(Request $request)
    {
        return $this->TemplateRepository->updateSecondaryDesktop($request);
    }

}
