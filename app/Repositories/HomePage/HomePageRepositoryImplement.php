<?php

namespace App\Repositories\HomePage;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\HomePageDesktop;
use App\Models\HomePageMobile;
use App\Http\Helpers\ResponseHelpers;
use Illuminate\Support\Facades\DB;

class HomePageRepositoryImplement extends Eloquent implements HomePageRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

  
    public function getAllMobile($requst)
    {
        return ResponseHelpers::sendSuccess('success get Primary mobile style data', HomePageMobile::get());
    }

    public function createMobile($request)
    {
        DB::beginTransaction();
    
        try {
            // Retrieve the necessary data from the request
            $data = $request->only([
                'announcer_text',
                'background_color',
                'icon_color',
                'text_color',
                'background_opacity',
                'icon_opacity'
            ]);
    
            // Create the new HomePageMobile record
            $newHomePage = new HomePageMobile();
            $newHomePage->announcer_text = $data['announcer_text'];
            $newHomePage->background_color = $data['background_color'];
            $newHomePage->icon_color = $data['icon_color'];
            $newHomePage->text_color = $data['text_color'];
            $newHomePage->background_opacity = $data['background_opacity'];
            $newHomePage->icon_opacity = $data['icon_opacity'];
    
            // Save the record to the database
            $newHomePage->save();
    
            // Commit the transaction
            DB::commit();
    
            return $newHomePage;
        } catch (\Throwable $th) {
            // Rollback the transaction in case of error
            DB::rollBack();
            // Handle and log the exception as needed
            return ResponseHelpers::sendError('An error occurred: ' . $th->getMessage(), [], 500);
        }
    }
    
    

    public function updateMobile($request)
    {
        DB::beginTransaction();
    
        try {
            // Retrieve the necessary data from the request
            $data = $request->only([
                'id',
                'announcer_text',
                'background_color',
                'icon_color',
                'text_color',
                'background_opacity',
                'icon_opacity'
            ]);
    
            // Find the existing HomePageMobile record by ID
            $existingHomePage = HomePageMobile::find($data['id']);
    
            if (!$existingHomePage) {
                return ResponseHelpers::sendError('Record not found.', [], 404);
            }
    
            // Update the record with new data
            $existingHomePage->announcer_text = $data['announcer_text'];
            $existingHomePage->background_color = $data['background_color'];
            $existingHomePage->icon_color = $data['icon_color'];
            $existingHomePage->text_color = $data['text_color'];
            $existingHomePage->background_opacity = $data['background_opacity'];
            $existingHomePage->icon_opacity = $data['icon_opacity'];
    
            // Save the updated record to the database
            $existingHomePage->save();
    
            // Commit the transaction
            DB::commit();
    
            return $existingHomePage;
        } catch (\Throwable $th) {
            // Rollback the transaction in case of error
            DB::rollBack();
            // Handle and log the exception as needed
            return ResponseHelpers::sendError('An error occurred: ' . $th->getMessage(), [], 500);
        }
    }
    

    public function deleteMobile($request)
    {
        DB::beginTransaction();
    
        try {
            // Retrieve the necessary data from the request
            $data = $request->only(['id']);
    
            // Find the existing HomePageMobile record by ID
            $existingHomePage = HomePageMobile::find($data['id']);
    
            if (!$existingHomePage) {
                return ResponseHelpers::sendError('Record not found.', [], 404);
            }
    
            // Delete the record
            $existingHomePage->delete();
    
            // Commit the transaction
            DB::commit();
    
            return ResponseHelpers::sendSuccess('Record deleted successfully.');
        } catch (\Throwable $th) {
            // Rollback the transaction in case of error
            DB::rollBack();
            // Handle and log the exception as needed
            return ResponseHelpers::sendError('An error occurred: ' . $th->getMessage(), [], 500);
        }
    }
    

    public function getAllDesktop($request)
    {
        return ResponseHelpers::sendSuccess('success get Primary mobile style data', HomePageDesktop::get());
    }

    public function createDesktop($request)
    {
        DB::beginTransaction();
    
        try {
            // Retrieve the necessary data from the request
            $data = $request->only([
                'announcer_text',
                'background_color',
                'icon_color',
                'text_color',
                'background_opacity',
                'icon_opacity'
            ]);
    
            // Create the new HomePageMobile record
            $newHomePage = new HomePageDesktop();
            $newHomePage->announcer_text = $data['announcer_text'];
            $newHomePage->background_color = $data['background_color'];
            $newHomePage->icon_color = $data['icon_color'];
            $newHomePage->text_color = $data['text_color'];
            $newHomePage->background_opacity = $data['background_opacity'];
            $newHomePage->icon_opacity = $data['icon_opacity'];
    
            // Save the record to the database
            $newHomePage->save();
    
            // Commit the transaction
            DB::commit();
    
            return $newHomePage;
        } catch (\Throwable $th) {
            // Rollback the transaction in case of error
            DB::rollBack();
            // Handle and log the exception as needed
            return ResponseHelpers::sendError('An error occurred: ' . $th->getMessage(), [], 500);
        }
    }

    public function updateDesktop($request)
    {
        DB::beginTransaction();
    
        try {
            // Retrieve the necessary data from the request
            $data = $request->only([
                'id',
                'announcer_text',
                'background_color',
                'icon_color',
                'text_color',
                'background_opacity',
                'icon_opacity'
            ]);
    
            // Find the existing HomePageMobile record by ID
            $existingHomePage = HomePageDesktop::find($data['id']);
    
            if (!$existingHomePage) {
                return ResponseHelpers::sendError('Record not found.', [], 404);
            }
    
            // Update the record with new data
            $existingHomePage->announcer_text = $data['announcer_text'];
            $existingHomePage->background_color = $data['background_color'];
            $existingHomePage->icon_color = $data['icon_color'];
            $existingHomePage->text_color = $data['text_color'];
            $existingHomePage->background_opacity = $data['background_opacity'];
            $existingHomePage->icon_opacity = $data['icon_opacity'];
    
            // Save the updated record to the database
            $existingHomePage->save();
    
            // Commit the transaction
            DB::commit();
    
            return $existingHomePage;
        } catch (\Throwable $th) {
            // Rollback the transaction in case of error
            DB::rollBack();
            // Handle and log the exception as needed
            return ResponseHelpers::sendError('An error occurred: ' . $th->getMessage(), [], 500);
        }
    }

    public function deleteDekstop($request)
    {
        DB::beginTransaction();
    
        try {
            // Retrieve the necessary data from the request
            $data = $request->only(['id']);
    
            // Find the existing HomePageMobile record by ID
            $existingHomePage = HomePageDesktop::find($data['id']);
    
            if (!$existingHomePage) {
                return ResponseHelpers::sendError('Record not found.', [], 404);
            }
    
            // Delete the record
            $existingHomePage->delete();
    
            // Commit the transaction
            DB::commit();
    
            return ResponseHelpers::sendSuccess('Record deleted successfully.');
        } catch (\Throwable $th) {
            // Rollback the transaction in case of error
            DB::rollBack();
            // Handle and log the exception as needed
            return ResponseHelpers::sendError('An error occurred: ' . $th->getMessage(), [], 500);
        }
    }

    // Write something awesome :)
}
