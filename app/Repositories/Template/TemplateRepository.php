<?php

namespace App\Repositories\Template;

use LaravelEasyRepository\Repository;

interface TemplateRepository extends Repository{

    // Write something awesome :)

    public function getAllPrimaryMobile($request);
    public function createPrimaryMobile($request);
    public function updatePrimaryMobile($request);

    public function getAllSecondaryMobile($request);
    public function createSecondaryMobile($request);
    public function updateSecondaryMobile($request);

    public function getAllPrimaryDesktop($request);
    public function createPrimaryDesktop($request);
    public function updatePrimaryDesktop($request);

    public function getAllSecondaryDesktop($request);
    public function createSecondaryDesktop($request);
    public function updateSecondaryDesktop($request);
}
