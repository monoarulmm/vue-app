<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;


class SettingController extends Controller
{
    public function store(Request $request){
       
        try {
            $request->validate([
                 'site_name' => 'required|string|max:255',
                 'logo_light' => 'nullable|file|mimes:jpg,jpeg,png|max:2048'
           ]);     

           $logoLight = null;
           if($request->hasfile('logo_light')){
                  
           $image = $request->file('logo_light');
           $imageName = time() . '.' . $image->getClientOriginalExtension();
           Storage::disk('public')->putFileAs('logo-light',$image,$imageName);

           $logoLight = 'setting/' .$imageName; 
           }

          Setting::create([
            'site_name' => $request->input('site_name'),
            'logo_light' => $logoLight,

          ]);

         return response()->json([
                'status'  => 200,
                'message' => 'User registered successfully',
            ]);
        }catch(\Exception $e){
           return response()->json([
               'message' => 'database has problem',
               'error' => $e->getMessage()
           ],500);
        }
    }
}
