<?php

namespace App\Repositories\AboutUs;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\AboutUsDesktop;
use App\Models\AboutUsMobile;
use App\Http\Helpers\ResponseHelpers;
use Illuminate\Support\Facades\DB;
class AboutUsRepositoryImplement extends Eloquent implements AboutUsRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function getAllMobile($requst)
    {
        return ResponseHelpers::sendSuccess('success get SideBar style data', AboutUsMobile::get());
    }

    public function createMobile($request)
    {
        DB::beginTransaction();

        try {
            // Retrieve the necessary data from the request
            $data = $request->only([
                'wrapped_background_color',
                'wrapped_border_color',
                'title_text_color',
                'content_text_color',
                'wrapper_background_opacity',
                'wrapper_border_opacity',
                'title_text_opacity',
                'content_text_opacity'
            ]);

            // Create the new AboutUsMobile record
            $newAboutUs = new AboutUsMobile();
            $newAboutUs->wrapped_background_color = $data['wrapped_background_color'];
            $newAboutUs->wrapped_border_color = $data['wrapped_border_color'];
            $newAboutUs->title_text_color = $data['title_text_color'];
            $newAboutUs->content_text_color = $data['content_text_color'];
            $newAboutUs->wrapper_background_opacity = $data['wrapper_background_opacity'];
            $newAboutUs->wrapper_border_opacity = $data['wrapper_border_opacity'];
            $newAboutUs->title_text_opacity = $data['title_text_opacity'];
            $newAboutUs->content_text_opacity = $data['content_text_opacity'];

            // Save the record to the database
            $newAboutUs->save();

            // Commit the transaction
            DB::commit();

            return $newAboutUs;
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
                'wrapped_background_color',
                'wrapped_border_color',
                'title_text_color',
                'content_text_color',
                'wrapper_background_opacity',
                'wrapper_border_opacity',
                'title_text_opacity',
                'content_text_opacity'
            ]);
    
            // Find the existing AboutUsMobile record by ID
            $aboutUs = AboutUsMobile::findOrFail($data['id']);
            
            // Update the record with new data
            $aboutUs->wrapped_background_color = $data['wrapped_background_color'];
            $aboutUs->wrapped_border_color = $data['wrapped_border_color'];
            $aboutUs->title_text_color = $data['title_text_color'];
            $aboutUs->content_text_color = $data['content_text_color'];
            $aboutUs->wrapper_background_opacity = $data['wrapper_background_opacity'];
            $aboutUs->wrapper_border_opacity = $data['wrapper_border_opacity'];
            $aboutUs->title_text_opacity = $data['title_text_opacity'];
            $aboutUs->content_text_opacity = $data['content_text_opacity'];
    
            // Save the updated record to the database
            $aboutUs->save();
    
            // Commit the transaction
            DB::commit();
    
            return $aboutUs;
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
            // Retrieve the ID from the request
            $id = $request->input('id');
    
            // Find the existing ButtonMobile record by ID
            $buttonStyle = AboutUsMobile::findOrFail($id);
            
            // Delete the record from the database
            $buttonStyle->delete();
    
            // Commit the transaction   
            DB::commit();
    
            // Return a success response
            return response()->json(['message' => 'Record deleted successfully.'], 200);
        } catch (\Throwable $th) {
            // Rollback the transaction in case of error
            DB::rollBack();
            // Handle and log the exception as needed
            return ResponseHelpers::sendError('An error occurred: ' . $th->getMessage(), [], 500);
        }
    }
    
    

    public function getAllDesktop($request)
    {
        return ResponseHelpers::sendSuccess('success get Primary Desktop style data', AboutUsDesktop::get());
    }

    public function createDesktop($request)
    {
        DB::beginTransaction();

        try {
            // Retrieve the necessary data from the request
            $data = $request->only([
                'wrapped_background_color',
                'wrapped_border_color',
                'title_text_color',
                'content_text_color',
                'wrapper_background_opacity',
                'wrapper_border_opacity',
                'title_text_opacity',
                'content_text_opacity'
            ]);

            // Create the new AboutUsDesktop record
            $newAboutUs = new AboutUsDesktop();
            $newAboutUs->wrapped_background_color = $data['wrapped_background_color'];
            $newAboutUs->wrapped_border_color = $data['wrapped_border_color'];
            $newAboutUs->title_text_color = $data['title_text_color'];
            $newAboutUs->content_text_color = $data['content_text_color'];
            $newAboutUs->wrapper_background_opacity = $data['wrapper_background_opacity'];
            $newAboutUs->wrapper_border_opacity = $data['wrapper_border_opacity'];
            $newAboutUs->title_text_opacity = $data['title_text_opacity'];
            $newAboutUs->content_text_opacity = $data['content_text_opacity'];

            // Save the record to the database
            $newAboutUs->save();

            // Commit the transaction
            DB::commit();

            return $newAboutUs;
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
                'wrapped_background_color',
                'wrapped_border_color',
                'title_text_color',
                'content_text_color',
                'wrapper_background_opacity',
                'wrapper_border_opacity',
                'title_text_opacity',
                'content_text_opacity'
            ]);
    
            // Find the existing AboutUsMobile record by ID
            $aboutUs = AboutUsDesktop::findOrFail($data['id']);
            
            // Update the record with new data
            $aboutUs->wrapped_background_color = $data['wrapped_background_color'];
            $aboutUs->wrapped_border_color = $data['wrapped_border_color'];
            $aboutUs->title_text_color = $data['title_text_color'];
            $aboutUs->content_text_color = $data['content_text_color'];
            $aboutUs->wrapper_background_opacity = $data['wrapper_background_opacity'];
            $aboutUs->wrapper_border_opacity = $data['wrapper_border_opacity'];
            $aboutUs->title_text_opacity = $data['title_text_opacity'];
            $aboutUs->content_text_opacity = $data['content_text_opacity'];
    
            // Save the updated record to the database
            $aboutUs->save();
    
            // Commit the transaction
            DB::commit();
    
            return $aboutUs;
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
            // Retrieve the ID from the request
            $id = $request->input('id');
    
            // Find the existing ButtonMobile record by ID
            $buttonStyle = AboutUsDesktop::findOrFail($id);
            
            // Delete the record from the database
            $buttonStyle->delete();
    
            // Commit the transaction
            DB::commit();
    
            // Return a success response
            return response()->json(['message' => 'Record deleted successfully.'], 200);
        } catch (\Throwable $th) {
            // Rollback the transaction in case of error
            DB::rollBack();
            // Handle and log the exception as needed
            return ResponseHelpers::sendError('An error occurred: ' . $th->getMessage(), [], 500);
        }
    }

    // Write something awesome :)
}
