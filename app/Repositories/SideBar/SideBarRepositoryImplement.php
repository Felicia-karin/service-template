<?php

namespace App\Repositories\SideBar;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\SideBarDesktop;
use App\Models\SideBarMobile;
use App\Http\Helpers\ResponseHelpers;
use Illuminate\Support\Facades\DB;

class SideBarRepositoryImplement extends Eloquent implements SideBarRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function getAllMobile($requst)
    {
        return ResponseHelpers::sendSuccess('success get SideBar style data', SideBarMobile::get());
    }

    public function createMobile($request)
    {
        DB::beginTransaction();
    
        try {
            // Retrieve the necessary data from the request
            $data = $request->only([
                'background_color',
                'sidebar_background_color',
                'sidebar_background_opacity',
                'sidebar_section_title_color',
                'sidebar_icon_color',
                'sidebar_text_color',
                'sidebar_section_title_opacity',
                'sidebar_icon_opacity',
                'sidebar_text_opacity'
            ]);
    
            // Create the new SideBarMobile record
            $newSideBarStyle = new SideBarMobile();
            $newSideBarStyle->background_color = $data['background_color'];
            $newSideBarStyle->sidebar_background_color = $data['sidebar_background_color'];
            $newSideBarStyle->sidebar_background_opacity = $data['sidebar_background_opacity'];
            $newSideBarStyle->sidebar_section_title_color = $data['sidebar_section_title_color'];
            $newSideBarStyle->sidebar_icon_color = $data['sidebar_icon_color'];
            $newSideBarStyle->sidebar_text_color = $data['sidebar_text_color'];
            $newSideBarStyle->sidebar_section_title_opacity = $data['sidebar_section_title_opacity'];
            $newSideBarStyle->sidebar_icon_opacity = $data['sidebar_icon_opacity'];
            $newSideBarStyle->sidebar_text_opacity = $data['sidebar_text_opacity'];
    
            // Save the record to the database
            $newSideBarStyle->save();
    
            // Commit the transaction
            DB::commit();
    
            return $newSideBarStyle;
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
                'background_color',
                'sidebar_background_color',
                'sidebar_background_opacity',
                'sidebar_section_title_color',
                'sidebar_icon_color',
                'sidebar_text_color',
                'sidebar_section_title_opacity',
                'sidebar_icon_opacity',
                'sidebar_text_opacity'
            ]);
    
            // Find the existing SideBarMobile record by ID
            $sideBarStyle = SideBarMobile::findOrFail($data['id']);
            
            // Update the record with new data
            $sideBarStyle->background_color = $data['background_color'];
            $sideBarStyle->sidebar_background_color = $data['sidebar_background_color'];
            $sideBarStyle->sidebar_background_opacity = $data['sidebar_background_opacity'];
            $sideBarStyle->sidebar_section_title_color = $data['sidebar_section_title_color'];
            $sideBarStyle->sidebar_icon_color = $data['sidebar_icon_color'];
            $sideBarStyle->sidebar_text_color = $data['sidebar_text_color'];
            $sideBarStyle->sidebar_section_title_opacity = $data['sidebar_section_title_opacity'];
            $sideBarStyle->sidebar_icon_opacity = $data['sidebar_icon_opacity'];
            $sideBarStyle->sidebar_text_opacity = $data['sidebar_text_opacity'];
    
            // Save the updated record to the database
            $sideBarStyle->save();
    
            // Commit the transaction
            DB::commit();
    
            return $sideBarStyle;
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
            $buttonStyle = SideBarMobile::findOrFail($id);
            
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
        return ResponseHelpers::sendSuccess('success get Primary Desktop style data', SideBarDesktop::get());
    }

    public function createDesktop($request)
    {
        DB::beginTransaction();
    
        try {
            // Retrieve the necessary data from the request
            $data = $request->only([
                'background_color',
                'sidebar_background_color',
                'sidebar_background_opacity',
                'sidebar_section_title_color',
                'sidebar_icon_color',
                'sidebar_text_color',
                'sidebar_section_title_opacity',
                'sidebar_icon_opacity',
                'sidebar_text_opacity'
            ]);
    
            // Create the new SideBarMobile record
            $newSideBarStyle = new SideBarDesktop();
            $newSideBarStyle->background_color = $data['background_color'];
            $newSideBarStyle->sidebar_background_color = $data['sidebar_background_color'];
            $newSideBarStyle->sidebar_background_opacity = $data['sidebar_background_opacity'];
            $newSideBarStyle->sidebar_section_title_color = $data['sidebar_section_title_color'];
            $newSideBarStyle->sidebar_icon_color = $data['sidebar_icon_color'];
            $newSideBarStyle->sidebar_text_color = $data['sidebar_text_color'];
            $newSideBarStyle->sidebar_section_title_opacity = $data['sidebar_section_title_opacity'];
            $newSideBarStyle->sidebar_icon_opacity = $data['sidebar_icon_opacity'];
            $newSideBarStyle->sidebar_text_opacity = $data['sidebar_text_opacity'];
    
            // Save the record to the database
            $newSideBarStyle->save();
    
            // Commit the transaction
            DB::commit();
    
            return $newSideBarStyle;
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
                'background_color',
                'sidebar_background_color',
                'sidebar_background_opacity',
                'sidebar_section_title_color',
                'sidebar_icon_color',
                'sidebar_text_color',
                'sidebar_section_title_opacity',
                'sidebar_icon_opacity',
                'sidebar_text_opacity'
            ]);
    
            // Find the existing SideBarMobile record by ID
            $sideBarStyle = SideBarDesktop  ::findOrFail($data['id']);
            
            // Update the record with new data
            $sideBarStyle->background_color = $data['background_color'];
            $sideBarStyle->sidebar_background_color = $data['sidebar_background_color'];
            $sideBarStyle->sidebar_background_opacity = $data['sidebar_background_opacity'];
            $sideBarStyle->sidebar_section_title_color = $data['sidebar_section_title_color'];
            $sideBarStyle->sidebar_icon_color = $data['sidebar_icon_color'];
            $sideBarStyle->sidebar_text_color = $data['sidebar_text_color'];
            $sideBarStyle->sidebar_section_title_opacity = $data['sidebar_section_title_opacity'];
            $sideBarStyle->sidebar_icon_opacity = $data['sidebar_icon_opacity'];
            $sideBarStyle->sidebar_text_opacity = $data['sidebar_text_opacity'];
    
            // Save the updated record to the database
            $sideBarStyle->save();
    
            // Commit the transaction
            DB::commit();
    
            return $sideBarStyle;
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
            $buttonStyle = SideBarDesktop::findOrFail($id);
            
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
