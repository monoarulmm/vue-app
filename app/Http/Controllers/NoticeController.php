<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
class NoticeController extends Controller
{
    public function store(Request $request){
        try{
           $request -> validate([
               'title' => 'nullable|string|max:355',
               'desc' => 'nullable|string',
               'notice_file' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx|max:10240',
           ]);

           $filePath = null;
           if($request->hasfile('notice_file')){
            $file = $request->file('notice_file');

            $fileName = time() . '-' .str_replace('','-',$file->getClientOriginalExtension());

            Storage::disk('public')->putFileAs('notices',$file,fileName );

            $filePath = 'notices/'.$fileName;
           }

           $notice = Notice::create([
               'title' => $request->input('file'),
               'desc' => $request->input('desc'),
               'notice_file' => $filePath,
           ]);

           return response()->json([
               'status' => 200,
               'message' => 'Notice '
           ]);

        }catch(\Exception $e){

        }
    }
}
