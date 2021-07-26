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
            session()->flash('success', 'Successfully.');
            session()->flash('error', 'ERROR.');
        return redirect()->to("feedbacks");
    }
}
