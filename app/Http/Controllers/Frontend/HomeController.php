<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\WebsiteData;

class HomeController extends Controller
{
    public function index()
    {
        $websitedata = WebsiteData::first();
        return view('frontend.index', compact('websitedata'));
    } 


    public function contact()
    {
        $websitedata = WebsiteData::first();
        return view('frontend.contact', compact('websitedata'));
    }

    public function about()
    {
        $websitedata = WebsiteData::first();
        return view('frontend.about-us', compact('websitedata'));
    } 

    
    public function services()
    {
        $websitedata = WebsiteData::first();
        return view('frontend.services', compact('websitedata'));
    } 
    
    public function career()
    {
        $websitedata = WebsiteData::first();
        return view('frontend.career', compact('websitedata'));
    } 

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        if ($contact->save()) {
            session()->flash('success-msg', 'Success !');
        } else {
            session()->flash('error-msg', 'Error !');
        }
        return redirect()->back();
    }
}
