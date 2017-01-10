<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use App\Services\Upload;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function edit()
    {
        $settings = Setting::first();

        return view('admin.settings.edit')
            ->with('settings', $settings);
    }

    public function update(Request $request)
    {
        $settings = Setting::first();
        $settings->name = $request->input('name');
        $settings->description = $request->input('description');

        if ($request->hasFile('logo')) {
            $image = new Upload($request->file('logo'));
            $settings->logo = $image->getFullPath();
        }

        $settings->twitter_account = $request->input('twitter_account');
        $settings->script_head = $request->input('script_head');
        $settings->script_body = $request->input('script_body');
        $settings->save();

        Flash::success('Settings were updated');

        return redirect()->back();
    }
}
