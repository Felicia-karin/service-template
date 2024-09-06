<?php

namespace App\Repositories\AboutUs;

use LaravelEasyRepository\Repository;

interface AboutUsRepository extends Repository{

    // Write something awesome :)

    public function getAllMobile($requst);
    public function createMobile($request);
    public function updateMobile($request);
    public function deleteMobile($request);

    public function getAllDesktop($request);
    public function createDesktop($request);
    public function updateDesktop($request);
    public function deleteDekstop($request);
}
