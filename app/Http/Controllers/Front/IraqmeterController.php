<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Models\Iraqmeter;
use App\Models\IraqmeterTranslation;

class IraqmeterController extends Controller
{
    public function boadcast()
    {
        return view('front.iraq-meter.boadcast');
    }
    
    public function boadcastDetails()
    {
        return view('front.iraq-meter.boadcast-details');
    }
    
    public function kon()
    {
        return view('front.iraq-meter.kon');
    }
    
    public function Tag($tag)
    {
        $check = IraqmeterTranslation::where('tags','like','%'.$tag.'%');
        if($check->count() >= 1 ):
            $ids = $check->pluck('parent_id')->toArray();
            $blogs = Iraqmeter::whereIn('id',$ids)->select('id','slug','img','created_at')
            ->with('translation:title,description,parent_id')
            ->orderBy('id','DESC')->paginate(10);
            return view('front.iraq-meter.tag', compact('tag','blogs'));
        endif;
        abort(404);
    }
    
    public function Info()
    {
        return view('front.iraq-meter.info');
    }
    
    public function blogs()
    {
        $blogs = Iraqmeter::select('id','slug','img','created_at')
        ->with('translation:title,description,parent_id')
        ->orderBy('id', 'DESC')->paginate(10);
        return view('front.iraq-meter.blogs', compact('blogs'));
    }
    
    public function SingleBlog($slug)
    {
        $check = Iraqmeter::where('slug',$slug);
        if($check->count() == 1):
            $blog = $check->with('translation')->first();
            if (!Cookie::has('Iraqmeter-'.$slug) ) :
                Cookie::queue( Cookie::make('Iraqmeter-'.$slug, '', (60*24*356)) );
                $check->update([
                    'views' => $blog->views+1
                ]);
            endif;
            return view('front.iraq-meter.single', compact('blog'));
        endif;
        abort(404);

    }
}
