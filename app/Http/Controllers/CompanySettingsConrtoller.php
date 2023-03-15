<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\CompanyModel;
use App\Traits\FileSaver;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;


class CompanySettingsConrtoller extends Controller
{
    use FileSaver;

    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        
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
        return redirect(route('/'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        return response(view('element.company_settings.edit'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $this->storeOrUpdate($request, '1');
        return redirect(route('companySettings.edit', 1));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }

    public function storeOrUpdate(Request $request, $id = null){
            try {
                $companySettings = CompanyModel::updateOrCreate(
                    [
                        'id'        =>$id
                    ],
                    [
                        'name'                  =>$request->name,
                        'title'                 =>$request->title,
                        'phone_one'             =>$request->phone_one,
                        'phone_two'             =>$request->phone_two,
                        'hotline'               =>$request->hotline,
                        'email_one'             =>$request->email_one,
                        'email_two'             =>$request->email_two,
                        'address_one'           =>$request->address_one,
                        'address_two'           =>$request->address_two,
                        'website'               =>$request->website,
                        'bin_no'                =>$request->bin_no,
                        'google_map'            =>$request->google_map,
                        'facebook_page_id'      =>$request->facebook_page_id,
                        'meta_keyword'          =>$request->meta_keyword,
                        'meta_description'      =>$request->meta_description,
                ]);
                $this->upload_file($request->company_logo, $companySettings, 'company_logo', 'company_settings/logo');
                $this->upload_file($request->favicon, $companySettings, 'favicon', 'company_settings/favicon');
            } catch (\Throwable $th) {
                throw $th;
            }
    }
    
}
