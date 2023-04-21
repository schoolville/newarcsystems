<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Client;
use App\Models\Collection;
use App\Models\Feature;
use App\Models\Hero;
use App\Models\Revenue;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function socialmedia(){
        return view('admin.socialmedia');
    }

    public function settings(){
        $settings = DB::table('settings')->first();
        return view('admin.settings', compact('settings'));
    }

    public function updatesettings(Request $request, $id){
        $settings = Setting::find($id);
        $settings->address = $request->address;
        $settings->phone_number = $request->phone_number;
        $settings->email = $request->email;
        $settings->copywrite_text = $request->copywrite_text;
        $settings->app_name = $request->app_name;
        $settings->app_description = $request->app_description;
        if ($request->hasfile('logo')) {
            $file1 = $request->file('logo');
            $logo = time() . $file1->getClientOriginalName();
            $file1->move(public_path() . "/uploads/settings/", $logo);
            $settings->logo = $logo;
        }
        if ($request->hasfile('footer_logo')) {
            $file1 = $request->file('footer_logo');
            $footer_logo = time() . $file1->getClientOriginalName();
            $file1->move(public_path() . "/uploads/settings/", $footer_logo);
            $settings->footer_logo = $footer_logo;
        }
        if ($request->hasfile('favicon')) {
            $file1 = $request->file('favicon');
            $favicon = time() . $file1->getClientOriginalName();
            $file1->move(public_path() . "/uploads/settings/", $favicon);
            $settings->favicon = $favicon;
        }
        $settings->update();
        return redirect()->back()->with('success', 'Settings Updated');
    }

    public function clients(){
        $clients = Client::all();
        return view('admin.clients', compact('clients'));
    }
    public function addclient(Request $request){
        $client = new Client();
        $client->name = $request->name;
        if ($request->hasfile('logo')) {
            $file1 = $request->file('logo');
            $logo = time() . $file1->getClientOriginalName();
            $file1->move(public_path() . "/uploads/clients/", $logo);
            $client->logo = $logo;
        }
        $client->save();
        return redirect()->back()->with('success', 'Client Added');
    }
    public function getclients($id){
        $client = Client::find($id);
        return response()->json([
            "data" => $client,
        ], 200);
    }
    public function updateclient(Request $request, $id)
    {
        $client = Client::find($id);
        $client->name = $request->name;
        if ($request->hasfile('logo')) {
            $file1 = $request->file('logo');
            $logo = time() . $file1->getClientOriginalName();
            $file1->move(public_path() . "/uploads/clients/", $logo);
            $client->logo = $logo;
        }
        $client->update();

        return redirect()->back()->with('success', 'Client Updated');
    }
    public function deleteclients($id){
        $client = Client::find($id);
        $client->delete();

        return redirect()->back()->with('success', 'Client Deleted');
    }

    public function hero(){
        $hero = DB::table('heroes')->first();
        return view('admin.hero', compact('hero'));
    }

    public function updatehero(Request $request, $id){
        $hero = Hero::find($id);
        $hero->title = $request->title;
        $hero->subtitle = $request->subtitle;
        $hero->button = $request->button;
        if ($request->hasfile('image')) {
            $file1 = $request->file('image');
            $image = time() . $file1->getClientOriginalName();
            $file1->move(public_path() . "/uploads/hero/", $image);
            $hero->image = $image;
        }
        $hero->update();
        return redirect()->back()->with('success', 'Hero Updated');
    }

    public function about(){
        $about = DB::table('abouts')->first();
        return view('admin.about', compact('about'));
    }

    public function updateabout(Request $request, $id){
        $about = About::find($id);
        $about->text = $request->text;
        if ($request->hasfile('image1')) {
            $file1 = $request->file('image1');
            $image1 = time() . $file1->getClientOriginalName();
            $file1->move(public_path() . "/uploads/about/", $image1);
            $about->image1 = $image1;
        }
        if ($request->hasfile('image2')) {
            $file2 = $request->file('image2');
            $image2 = time() . $file2->getClientOriginalName();
            $file2->move(public_path() . "/uploads/about/", $image2);
            $about->image2 = $image2;
        }
        $about->update();

        return redirect()->back()->with('success', 'About Updated');
    }

    public function feature(){
        $features = Feature::all();
        return view('admin.feature', compact('features'));
    }

    public function addfeature(Request $request){
        $features = new Feature();
        $features->title = $request->title;
        $features->text = $request->text;
        if ($request->hasfile('icon')) {
            $file2 = $request->file('icon');
            $icon = time() . $file2->getClientOriginalName();
            $file2->move(public_path() . "/uploads/features/", $icon);
            $features->icon = $icon;
        }
        $features->save();
        return redirect()->back()->with('success', 'Feature Added');
    }

    public function getfeature($id){
        $features = Feature::find($id);
        return response()->json([
            "data" => $features,
        ], 200);
    }

    public function updatefeature(Request $request, $id){
        $features = Feature::find($id);
        $features->title = $request->title;
        $features->text = $request->text;
        if ($request->hasfile('icon')) {
            $file2 = $request->file('icon');
            $icon = time() . $file2->getClientOriginalName();
            $file2->move(public_path() . "/uploads/features/", $icon);
            $features->icon = $icon;
        }
        $features->update();
        return redirect()->back()->with('success', 'Feature Updated');
    }

    public function deletefeature($id){
        $features = Feature::find($id);
        $features->delete();
        return redirect()->back()->with('success', 'Feature Deleted');
    }

    public function revenue(){
        $revenue = DB::table('revenues')->first();
        return view('admin.revenue', compact('revenue'));
    }

    public function updaterevenue(Request $request, $id){
        $revenue = Revenue::find($id);
        $revenue->text = $request->text;
        if ($request->hasfile('image')) {
            $file1 = $request->file('image');
            $image1 = time() . $file1->getClientOriginalName();
            $file1->move(public_path() . "/uploads/revenue/", $image1);
            $revenue->image = $image1;
        }
        $revenue->update();

        return redirect()->back()->with('success', 'Revenue Updated');
    }

    public function collection(){
        $collections = DB::table('collections')->first();
        return view('admin.collection', compact('collections'));
    }

    public function updatecollections(Request $request, $id){
        $collections = Collection::find($id);
        $collections->text = $request->text;
        if ($request->hasfile('image')) {
            $file1 = $request->file('image');
            $image1 = time() . $file1->getClientOriginalName();
            $file1->move(public_path() . "/uploads/collections/", $image1);
            $collections->image = $image1;
        }
        $collections->update();

        return redirect()->back()->with('success', 'Revenue Updated');
    }

    public function contact(){
        return view('admin.contact');
    }
}
