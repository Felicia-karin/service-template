<?php

namespace App\Repositories\Button;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\ButtonMobile;
use App\Models\ButtonDesktop;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\ResponseHelpers;
use App\Models\Button;

class ButtonRepositoryImplement extends Eloquent implements ButtonRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function getAllMobile($requst)
    {
        return ResponseHelpers::sendSuccess('success get Button style data', ButtonMobile::get());
    }

    public function createMobile($request)
    {
        
    DB::beginTransaction();

    try {
        // Retrieve the necessary data from the request
        $data = $request->only([
            'button_color',
            'login_button_background_color',
            'login_button_border_color',
            'login_button_background_hover_color',
            'login_button_background_selected_color',
            'login_button_text_color',
            'login_button_background_opacity',
            'login_button_border_opacity',
            'login_button_hover_opacity',
            'login_button_selected_opacity',
            'login_button_text_opacity'
        ]);

        // Create the new ButtonMobile record
        $newButtonStyle = new ButtonMobile();
        $newButtonStyle->button_color = $data['button_color'];
        $newButtonStyle->login_button_background_color = $data['login_button_background_color'];
        $newButtonStyle->login_button_border_color = $data['login_button_border_color'];
        $newButtonStyle->login_button_background_hover_color = $data['login_button_background_hover_color'];
        $newButtonStyle->login_button_background_selected_color = $data['login_button_background_selected_color'];
        $newButtonStyle->login_button_text_color = $data['login_button_text_color'];
        $newButtonStyle->login_button_background_opacity = $data['login_button_background_opacity'];
        $newButtonStyle->login_button_border_opacity = $data['login_button_border_opacity'];
        $newButtonStyle->login_button_hover_opacity = $data['login_button_hover_opacity'];
        $newButtonStyle->login_button_selected_opacity = $data['login_button_selected_opacity'];
        $newButtonStyle->login_button_text_opacity = $data['login_button_text_opacity'];

        // Save the record to the database
        $newButtonStyle->save();

        // Commit the transaction
        DB::commit();

        return $newButtonStyle;
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
                'button_color',
                'login_button_background_color',
                'login_button_border_color',
                'login_button_background_hover_color',
                'login_button_background_selected_color',
                'login_button_text_color',
                'login_button_background_opacity',
                'login_button_border_opacity',
                'login_button_hover_opacity',
                'login_button_selected_opacity',
                'login_button_text_opacity'
            ]);

            // Find the existing ButtonMobile record by ID
            $buttonStyle = ButtonMobile::findOrFail($data['id']);
            
            // Update the record with new data
            $buttonStyle->button_color = $data['button_color'];
            $buttonStyle->login_button_background_color = $data['login_button_background_color'];
            $buttonStyle->login_button_border_color = $data['login_button_border_color'];
            $buttonStyle->login_button_background_hover_color = $data['login_button_background_hover_color'];
            $buttonStyle->login_button_background_selected_color = $data['login_button_background_selected_color'];
            $buttonStyle->login_button_text_color = $data['login_button_text_color'];
            $buttonStyle->login_button_background_opacity = $data['login_button_background_opacity'];
            $buttonStyle->login_button_border_opacity = $data['login_button_border_opacity'];
            $buttonStyle->login_button_hover_opacity = $data['login_button_hover_opacity'];
            $buttonStyle->login_button_selected_opacity = $data['login_button_selected_opacity'];
            $buttonStyle->login_button_text_opacity = $data['login_button_text_opacity'];

            // Save the updated record to the database
            $buttonStyle->save();

            // Commit the transaction
            DB::commit();

            return $buttonStyle;
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
            $buttonStyle = ButtonMobile::findOrFail($id);
            
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
        return ResponseHelpers::sendSuccess('success get Primary mobile style data', ButtonDesktop::get());
    }

    public function createDesktop($request)
    {
        DB::beginTransaction();

        try {
            // Retrieve the necessary data from the request
            $data = $request->only([
                'button_color',
                'login_button_background_color',
                'login_button_border_color',
                'login_button_background_hover_color',
                'login_button_background_selected_color',
                'login_button_text_color',
                'login_button_background_opacity',
                'login_button_border_opacity',
                'login_button_hover_opacity',
                'login_button_selected_opacity',
                'login_button_text_opacity'
            ]);
    
            // Create the new ButtonDesktop record
            $newButtonStyle = new ButtonDesktop();
            $newButtonStyle->button_color = $data['button_color'];
            $newButtonStyle->login_button_background_color = $data['login_button_background_color'];
            $newButtonStyle->login_button_border_color = $data['login_button_border_color'];
            $newButtonStyle->login_button_background_hover_color = $data['login_button_background_hover_color'];
            $newButtonStyle->login_button_background_selected_color = $data['login_button_background_selected_color'];
            $newButtonStyle->login_button_text_color = $data['login_button_text_color'];
            $newButtonStyle->login_button_background_opacity = $data['login_button_background_opacity'];
            $newButtonStyle->login_button_border_opacity = $data['login_button_border_opacity'];
            $newButtonStyle->login_button_hover_opacity = $data['login_button_hover_opacity'];
            $newButtonStyle->login_button_selected_opacity = $data['login_button_selected_opacity'];
            $newButtonStyle->login_button_text_opacity = $data['login_button_text_opacity'];
    
            // Save the record to the database
            $newButtonStyle->save();
    
            // Commit the transaction
            DB::commit();
    
            return $newButtonStyle;
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
                'button_color',
                'login_button_background_color',
                'login_button_border_color',
                'login_button_background_hover_color',
                'login_button_background_selected_color',
                'login_button_text_color',
                'login_button_background_opacity',
                'login_button_border_opacity',
                'login_button_hover_opacity',
                'login_button_selected_opacity',
                'login_button_text_opacity'
            ]);

            // Find the existing ButtonDesktop record by ID
            $buttonStyle = ButtonDesktop::findOrFail($data['id']);
            
            // Update the record with new data
            $buttonStyle->button_color = $data['button_color'];
            $buttonStyle->login_button_background_color = $data['login_button_background_color'];
            $buttonStyle->login_button_border_color = $data['login_button_border_color'];
            $buttonStyle->login_button_background_hover_color = $data['login_button_background_hover_color'];
            $buttonStyle->login_button_background_selected_color = $data['login_button_background_selected_color'];
            $buttonStyle->login_button_text_color = $data['login_button_text_color'];
            $buttonStyle->login_button_background_opacity = $data['login_button_background_opacity'];
            $buttonStyle->login_button_border_opacity = $data['login_button_border_opacity'];
            $buttonStyle->login_button_hover_opacity = $data['login_button_hover_opacity'];
            $buttonStyle->login_button_selected_opacity = $data['login_button_selected_opacity'];
            $buttonStyle->login_button_text_opacity = $data['login_button_text_opacity'];

            // Save the updated record to the database
            $buttonStyle->save();

            // Commit the transaction
            DB::commit();

            return $buttonStyle;
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
            $buttonStyle = ButtonDesktop::findOrFail($id);
            
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
