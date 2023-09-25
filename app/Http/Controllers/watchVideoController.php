<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class watchVideoController extends Controller
{
    private $libraryId = 'VIDEO_LIBRARY_ID';

    public function index(Request $request)
    {
        $guid = $request->input('guid');
        $title = $request->input('title');
        $libraryId = $this->libraryId;
        return view('student.watch-video', ['url' => $guid,'name'=>$title,'libraryId'=>$libraryId]);
    }
}
