<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\CompanyModel;

class CompanySettingsConrtoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return response(view('element.company_settings.edit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $favicon= $request->input("Favicon");
        $name = $request->input("Name");
        $title = $request->input("Title");
        $phoneOne = $request->input("PhoneOne");
        $phoneTwo = $request->input("PhoneTwo");
        $hotLine = $request->input("HotLine");
        $primaryEmail = $request->input("PrimaryEmail");
        $secondaryEmail = $request->input("SecondaryEmail");
        $primaryAddress = $request->input("PrimaryAddress");
        $companyLogo = $request->input("CompanyLogo");
        $website = $request->input("Website");
        $binNO = $request->input("BinNO");
        $googleMap = $request->input("GoogleMap");
        $secondaryAddress = $request->input("SecondaryAddress");
        $metaKeyword = $request->input("MetaKeyword");
        $metaDescription = $request->input("MetaDescription");

        if($name == ""){
            CompanyModel::where("id", "=", 1)->update(["name" => ""]);
        }
        else{
            CompanyModel::where("id", "=", 1)->update(["name" => $name]);
        }

        if($title == ""){
            CompanyModel::where("id", "=", 1)->update(["title" => ""]);
        }
        else{
            CompanyModel::where("id", "=", 1)->update(["title" => $title]);
        }

        if($phoneOne == ""){
            CompanyModel::where("id", "=", 1)->update(["phone_one" => ""]);
        }
        else{
            CompanyModel::where("id", "=", 1)->update(["phone_one" => $phoneOne]);
        }

        if($phoneTwo == ""){
            CompanyModel::where("id", "=", 1)->update(["phone_two" => ""]);
        }
        else{
            CompanyModel::where("id", "=", 1)->update(["phone_two" => $phoneTwo]);
        }
        if($hotLine == ""){
            CompanyModel::where("id", "=", 1)->update(["hot_line" => ""]);
        }
        else{
            CompanyModel::where("id", "=", 1)->update(["hot_line" => $hotLine]);
        }

        if($primaryEmail == ""){
            CompanyModel::where("id", "=", 1)->update(["primary_email" => ""]);
        }
        else{
            CompanyModel::where("id", "=", 1)->update(["primary_email" => $primaryEmail]);
        }

        if($secondaryEmail == ""){
            CompanyModel::where("id", "=", 1)->update(["secondary_email" => ""]);
        }
        else{
            CompanyModel::where("id", "=", 1)->update(["secondary_email" => $secondaryEmail]);
        }

        if($primaryAddress == ""){
            CompanyModel::where("id", "=", 1)->update(["primary_address" => ""]);
        }
        else{
            CompanyModel::where("id", "=", 1)->update(["primary_address" => $primaryAddress]);
        }

        if($website == ""){
            CompanyModel::where("id", "=", 1)->update(["website" => ""]);
        }
        else{
            CompanyModel::where("id", "=", 1)->update(["website" => $website]);
        }

        if($binNO == ""){
            CompanyModel::where("id", "=", 1)->update(["bin_no" => ""]);
        }
        else{
            CompanyModel::where("id", "=", 1)->update(["bin_no" => $binNO]);
        }

        if($googleMap == ""){
            CompanyModel::where("id", "=", 1)->update(["google_map" => ""]);
        }
        else{
            CompanyModel::where("id", "=", 1)->update(["google_map" => $googleMap]);
        }

        if($secondaryAddress == ""){
            CompanyModel::where("id", "=", 1)->update(["secondary_address" => ""]);
        }
        else{
            CompanyModel::where("id", "=", 1)->update(["secondary_address" => $secondaryAddress]);
        }

        if($metaKeyword == ""){
            CompanyModel::where("id", "=", 1)->update(["meta_keyword" => ""]);
        }
        else{
            CompanyModel::where("id", "=", 1)->update(["meta_keyword" => $metaKeyword]);
        }

        if($metaDescription == ""){
            CompanyModel::where("id", "=", 1)->update(["meta_description" => ""]);
        }
        else{
            CompanyModel::where("id", "=", 1)->update(["meta_description" => $metaDescription]);
        }

        if($favicon ==  "undefined"){
            ;
        }
        else{
            //delete present favicon
            $websiteInformation = CompanyModel::find(1);
            $present_favicon = (explode('/', $websiteInformation->favicon))[3];
            Storage::delete("public/images/".$present_favicon);

            //upload new favicon
            $new_favicon = $request->file('Favicon')->store('public/images');
            $new_favicon_explode = (explode('/', $new_favicon))[2];
            $new_favicon_url = "/storage/images/" . $new_favicon_explode;
            CompanyModel::where("id", "=", 1)->update(["favicon"=>$new_favicon_url]);
        }



        if($companyLogo ==  "undefined"){

        }
        else{
            //delete present website logo
            $websiteInformation = CompanyModel::find(1);
            $present_website_logo = (explode('/', $websiteInformation->company_logo))[3];
            Storage::delete("public/images/".$present_website_logo);

            //upload new website logo
            $new_website_logo = $request->file('CompanyLogo')->store('public/images');
            $new_website_logo_explode = (explode('/', $new_website_logo))[2];
            $new_website_logo_url = "/storage/images/" . $new_website_logo_explode;
            CompanyModel::where("id", "=", 1)->update(["company_logo"=>$new_website_logo_url]);
        }

        return 1;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
    
}
