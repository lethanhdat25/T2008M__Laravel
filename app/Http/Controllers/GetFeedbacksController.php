<?php

namespace App\Http\Controllers;

use App\Models\getFeedbacks;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class GetFeedbacksController extends Controller
{
    //
    public function submit(Request $request){
        $submit=getFeedbacks::create([
            "name"=>$request->get("name"),
            "email"=>$request->get("email"),
            "telephone"=>$request->get("telephone"),
            "feedback"=>$request->get("feedback")
        ]);
        if ($submit) alert()->success('Title','Lorem Lorem Lorem');
        else alert()->error('Post Created', 'Something went wrong!');
        return redirect()->to("feedbacks");
    }
}
