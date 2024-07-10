<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Rewaq;
use App\Models\RewaqTranslation;
use App\Models\Rewaqteam;
use Illuminate\Http\Request;

class RewaqController extends Controller
{

    public function __construct()
    {
        $this->middleware('authadmin:rewaq_edit')->only('edit', 'update');
    }
    
    public function edit()
    {
        $team_pm = Rewaqteam::where('type','pm')->select('id')->with('translation:name,rewaq_id')->get();
        $team_am = Rewaqteam::where('type','am')->select('id')->with('translation:name,rewaq_id')->get();
        $team_ps = Rewaqteam::where('type','ps')->select('id')->with('translation:name,rewaq_id')->get();
        
        $row = Rewaq::with('translations')->first();
        return view('admin.rewaq.edit', compact('row','team_pm','team_am','team_ps'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'contact_email' => 'required|email|string|max:50',
            'img' => 'required|string|max:255',

            'facebook'  => 'nullable|url|max:255',
            'twitter'   => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'youtube'   => 'nullable|url|max:255',
            'linkedin'  => 'nullable|url|max:255',
            'whatsapp'  => 'nullable|url|max:255',
            'telegram'  => 'nullable|url|max:255',
            'tiktok'    => 'nullable|url|max:255',

            'pm_id' => 'required|integer|exists:rewaqteams,id',
            'am_id' => 'required|integer|exists:rewaqteams,id',
            'ps_id' => 'required|integer|exists:rewaqteams,id',
            
            'content' => 'required|array',
            'content.*' => 'required|string',
        ]);
        Rewaq::where('id', 1)->update([
            'img' => $request->img,
            'contact_email' => $request->contact_email,
            'pm_id' => $request->pm_id,
            'am_id' => $request->am_id,
            'ps_id' => $request->ps_id,

            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'linkedin' => $request->linkedin,
            'whatsapp' => $request->whatsapp,
            'telegram' => $request->telegram,
            'tiktok' => $request->tiktok,
        ]);
        foreach (SupportedKeys() as $key) :
            RewaqTranslation::where(['parent_id'=>1,'locale'=>$key])
            ->update([
                'content' => $request->content[$key],
            ]);
        endforeach;
        return back()->with('success', __('global.alert_done_update'));
    }
    
}
