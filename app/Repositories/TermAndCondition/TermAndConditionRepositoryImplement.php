<?php

namespace App\Repositories\TermAndCondition;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\TermAndCondition;

class TermAndConditionRepositoryImplement extends Eloquent implements TermAndConditionRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(TermAndCondition $model)
    {
        $this->model = $model;
    }

    // Write something awesome :)
}
