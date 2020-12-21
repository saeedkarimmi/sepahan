<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class SetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Setting::query()->where('type', 'banner')->get();
        $footers = Setting::query()->where('type', 'footer')->get();
        $sliders = Setting::query()->where('type', 'slider')->get();
        return view('admin.pages.setting.index',compact('banners', 'footers','sliders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = Setting::query()->where('type', 'banner')->findOrFail($id);
        return view('admin.pages.setting.edit', ['setting' => $setting]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'value' => ['string'],
            'img' => ['required', 'file']
        ]);

        $setting = Setting::query()->where('type', 'banner')->findOrFail($id);
        $setting->value = $request->input('value');

        $path = "storage/" . $request->file('img')->store('file');

        $setting->value = $request->input('value');
        $setting->img = $path;
        $setting->save();
        return redirect(route('admin.setting.index'));
    }

    public function editFooter($id)
    {
        $setting = Setting::query()->where('type', 'footer')->findOrFail($id);
        return view('admin.pages.setting.edit-footer', ['setting' => $setting]);
    }

    public function updateFooter(Request $request, $id)
    {
        $request->validate([
            'value' => ['required', 'string'],
        ]);

        $setting = Setting::query()->where('type', 'footer')->findOrFail($id);
        $setting->value = $request->input('value');
        $setting->save();
        return redirect(route('admin.setting.index'));
    }

    public function editSlider($id)
    {
        $setting = Setting::query()->where('type', 'slider')->findOrFail($id);
        return view('admin.pages.setting.edit-slider', ['setting' => $setting]);
    }

    public function updateSlider(Request $request, $id)
    {
        $request->validate([
            'value' => ['string'],
            'img' => ['required', 'file']
        ]);

        $setting = Setting::query()->where('type', 'slider')->findOrFail($id);
        $path = "storage/" . $request->file('img')->store('file');

        $setting->value = $request->input('value');
        $setting->img = $path;
        $setting->save();
        return redirect(route('admin.setting.index'));
    }



    public function uploadFile($file, $pathName)
    {
        $hashedName = Str::random('25') . '.' . pathinfo($file->getClientOriginalName())['extension'];
        return Storage::disk('public')->putFileAs($pathName, $file, $hashedName);
    }
}
