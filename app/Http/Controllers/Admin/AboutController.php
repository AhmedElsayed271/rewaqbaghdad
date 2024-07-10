<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\About;
use App\Models\AboutTranslation;
use App\Models\AboutData;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function __construct()
    {
        $this->middleware('authadmin:about_show');
    }
    
    public function index()
    {
        $row = About::with('translations','alltargets','allvisions','allmeans')->first();
        return view('admin.about.index', compact('row'));
    }
    
    public function update(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'img1' => 'required|string|max:200',
            'img2' => 'required|string|max:200',
            
            'description' => 'array',
            'description.*' => 'required|string',
            
            'target_ar' => 'array',
            'target_ar.*' => 'required|string|max:255',
            'target_en' => 'array',
            'target_en.*' => 'required|string|max:255',

            'vision_ar' => 'array',
            'vision_ar.*' => 'required|string|max:255',
            'vision_en' => 'array',
            'vision_en.*' => 'required|string|max:255',
            
            'means_ar' => 'array',
            'means_ar.*' => 'required|string|max:255',
            'means_en' => 'array',
            'means_en.*' => 'required|string|max:255',
        ]);

        $id = 1;
        About::where('id',$id)->update([
            'img1' => $request->img1,
            'img2' => $request->img2,
        ]);

        AboutTranslation::where(['locale'=>'ar'])->update([
            'description' => $request->description['ar'],
        ]);
        AboutTranslation::where(['locale'=>'en'])->update([
            'description' => $request->description['en'],
        ]);
        

        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            AboutData::truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($request->target_ar as $tarKey => $target) :
            $tar = new AboutData;
            $tar->type = 'targets';
            $tar->content_ar = $request->target_ar[$tarKey];
            $tar->content_en = $request->target_en[$tarKey];
            $tar->about_id = $id;
            $tar->save();
        endforeach;

        foreach ($request->vision_ar as $viKey => $vision) :
            $vi = new AboutData;
            $vi->type = 'vision';
            $vi->content_ar = $request->vision_ar[$viKey];
            $vi->content_en = $request->vision_en[$viKey];
            $vi->about_id = $id;
            $vi->save();
        endforeach;
        
        foreach ($request->means_ar as $meanKey => $means) :
            $mean = new AboutData;
            $mean->type = 'means';
            $mean->content_ar = $request->means_ar[$meanKey];
            $mean->content_en = $request->means_en[$meanKey];
            $mean->about_id = $id;
            $mean->save();
        endforeach;
        
        return back()->with('success', __('global.alert_done_update'));
    }

    
}
