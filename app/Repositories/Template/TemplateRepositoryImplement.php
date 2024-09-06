<?php

namespace App\Repositories\Template;

use App\Models\TemplateMobile;
use App\Http\Helpers\ResponseHelpers;
use Illuminate\Support\Facades\DB;
use App\Models\TemplateDesktop;
use LaravelEasyRepository\Implementations\Eloquent;

class TemplateRepositoryImplement extends Eloquent implements TemplateRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function getAllPrimaryMobile($request)
    {
        return ResponseHelpers::sendSuccess('success get Primary mobile style data', TemplateMobile::get());
    }

    public function createPrimaryMobile($request)
    {
        DB::beginTransaction();
    
        try {
            // Retrieve the necessary data from the request
            $data = $request->only([
                'primary'
            ]);
    
            // Create the new Template 
            $newPrimaryStyle = new TemplateMobile();
            $newPrimaryStyle->primary = $data['primary'];
            $newPrimaryStyle->save();
    
            // Commit the transaction
            DB::commit();
    
            return $newPrimaryStyle;
        } catch (\Throwable $th) {
            // Rollback the transaction in case of error
            DB::rollBack();
            // Handle and log the exception as needed
            return ResponseHelpers::sendError('An error occurred: ' . $th->getMessage(), [], 500);
        }
    }

    public function updatePrimaryMobile($request)
    {
        DB::beginTransaction();
    
        try {
            // Retrieve the necessary data from the request
            $data = $request->only([
                'id',
                'primary'
            ]);
            
            // Create the new Template 
            $newPrimaryStyle = TemplateMobile::find($data['id'])->first();
            $newPrimaryStyle->primary = $data['primary'];
            $newPrimaryStyle->save();
    
            // Commit the transaction
            DB::commit();
    
            return $newPrimaryStyle;
        } catch (\Throwable $th) {
            // Rollback the transaction in case of error
            DB::rollBack();
            // Handle and log the exception as needed
            return ResponseHelpers::sendError('An error occurred: ' . $th->getMessage(), [], 500);
        }
    }

    public function getAllSecondaryMobile($request)
    {
        return ResponseHelpers::sendSuccess('success get Secondary mobile style data', TemplateMobile::get());
    }

    public function createSecondaryMobile($request)
    {
        DB::beginTransaction();
    
        try {
            // Retrieve the necessary data from the request
            $data = $request->only([
                'secondary'
            ]);
    
            // Create the new Template 
            $newSecondaryStyle = new TemplateMobile();
            $newSecondaryStyle->secondary = $data['secondary'];
            $newSecondaryStyle->save();
    
            // Commit the transaction
            DB::commit();
    
            return $newSecondaryStyle;
        } catch (\Throwable $th) {
            // Rollback the transaction in case of error
            DB::rollBack();
            // Handle and log the exception as needed
            return ResponseHelpers::sendError('An error occurred: ' . $th->getMessage(), [], 500);
        }
    }

    public function updateSecondaryMobile($request)
    {
        DB::beginTransaction();
    
        try {
            // Retrieve the necessary data from the request
            $data = $request->only([
                'id',
                'secondary'
            ]);
    
            // Create the new Template 
            $newSecondaryStyle = TemplateMobile::find($data['id'])->first();
            $newSecondaryStyle->secondary = $data['secondary'];
            $newSecondaryStyle->save();
    
            // Commit the transaction
            DB::commit();
    
            return $newSecondaryStyle;
        } catch (\Throwable $th) {
            // Rollback the transaction in case of error
            DB::rollBack();
            // Handle and log the exception as needed
            return ResponseHelpers::sendError('An error occurred: ' . $th->getMessage(), [], 500);
        }
    }

    public function getAllPrimaryDesktop($request)
    {
        return ResponseHelpers::sendSuccess('success get Primary Desktop     style data', TemplateDesktop::get());
    }

    public function createPrimaryDesktop($request)
    {
        DB::beginTransaction();
    
        try {
            // Retrieve the necessary data from the request
            $data = $request->only([
                'primary'
            ]);
    
            // Create the new Template 
            $newPrimaryStyle = new TemplateDesktop();
            $newPrimaryStyle->primary = $data['primary'];
            $newPrimaryStyle->save();
    
            // Commit the transaction
            DB::commit();
    
            return $newPrimaryStyle;
        } catch (\Throwable $th) {
            // Rollback the transaction in case of error
            DB::rollBack();
            // Handle and log the exception as needed
            return ResponseHelpers::sendError('An error occurred: ' . $th->getMessage(), [], 500);
        }
    }

    public function getAllSecondaryDesktop($request)
    {
        return 1;
    }

    public function updatePrimaryDesktop($request)
    {
        DB::beginTransaction();
    
        try {
            // Retrieve the necessary data from the request
            $data = $request->only([
                'id',
                'primary'
            ]);
    
            // Create the new Template 
            $newPrimaryStyle = TemplateDesktop::find($data['id'])->first();
            $newPrimaryStyle->primary = $data['primary'];
            $newPrimaryStyle->save();
    
            // Commit the transaction
            DB::commit();
    
            return $newPrimaryStyle;
        } catch (\Throwable $th) {
            // Rollback the transaction in case of error
            DB::rollBack();
            // Handle and log the exception as needed
            return ResponseHelpers::sendError('An error occurred: ' . $th->getMessage(), [], 500);
        }
    }

    public function createSecondaryDesktop($request)
    {
        DB::beginTransaction();
    
        try {
            // Retrieve the necessary data from the request
            $data = $request->only([
                'secondary'
            ]);
    
            // Create the new Template 
            $newPrimaryStyle = new TemplateDesktop();
            $newPrimaryStyle->secondary = $data['secondary'];
            $newPrimaryStyle->save();
    
            // Commit the transaction
            DB::commit();
    
            return $newPrimaryStyle;
        } catch (\Throwable $th) {
            // Rollback the transaction in case of error
            DB::rollBack();
            // Handle and log the exception as needed
            return ResponseHelpers::sendError('An error occurred: ' . $th->getMessage(), [], 500);
        }
    }

    public function updateSecondaryDesktop($request)
    {
        DB::beginTransaction();
    
        try {
            // Retrieve the necessary data from the request
            $data = $request->only([
                'id',
                'secondary'
            ]);
    
            // Create the new Template 
            $newPrimaryStyle = TemplateMobile::find($data['id'])->first();
            $newPrimaryStyle->secondary = $data['secondary'];
            $newPrimaryStyle->save();
    
            // Commit the transaction
            DB::commit();
    
            return $newPrimaryStyle;
        } catch (\Throwable $th) {
            // Rollback the transaction in case of error
            DB::rollBack();
            // Handle and log the exception as needed
            return ResponseHelpers::sendError('An error occurred: ' . $th->getMessage(), [], 500);
        }
    }

    // Write something awesome :)
}
