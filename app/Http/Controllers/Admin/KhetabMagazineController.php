<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Magazine;
use App\Models\MagazineTranslation;
use App\Models\Magazineteam;

use App\Models\KhetabMagazine;
use App\Models\KhetabMagazineTranslation;
use App\Models\KhetabMagazineteam;

class KhetabMagazineController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('authadmin:khetab_magazine_edit')->only('edit', 'update');
    }

    public function edit()
    {
        $team_cbd = KhetabMagazineteam::where('type','cbd')->select('id')->with('translation:name,parent_id')->get();
        $team_ec = KhetabMagazineteam::where('type','ec')->select('id')->with('translation:name,parent_id')->get();
        $team_dec = KhetabMagazineteam::where('type','dec')->select('id')->with('translation:name,parent_id')->get();
        $team_me = KhetabMagazineteam::where('type','me')->select('id')->with('translation:name,parent_id')->get();
        
        $row = KhetabMagazine::with('translations')->first();

        return view('admin.khetab_magazine.edit', compact('row','team_cbd','team_ec','team_dec','team_me'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'contact_email' => 'required|email|string|max:50',
            'img' => 'required|string|max:255',

            'cbd_id' => 'required|integer|exists:khetab_magazineteams,id',
            'ec_id' => 'required|integer|exists:khetab_magazineteams,id',
            'dec_id' => 'required|integer|exists:khetab_magazineteams,id',
            'me_id' => 'required|integer|exists:khetab_magazineteams,id',

            'facebook'  => 'nullable|url|max:255',
            'twitter'   => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'youtube'   => 'nullable|url|max:255',
            'linkedin'  => 'nullable|url|max:255',
            'whatsapp'  => 'nullable|url|max:255',
            'telegram'  => 'nullable|url|max:255',
            'tiktok'    => 'nullable|url|max:255',
            
            'content' => 'required|array',
            'content.*' => 'required|string',
        ]);
        KhetabMagazine::where('id', 1)->update([
            'img' => $request->img,
            'contact_email' => $request->contact_email,
            'cbd_id' => $request->cbd_id,
            'ec_id' => $request->ec_id,
            'dec_id' => $request->dec_id,
            'me_id' => $request->me_id,

            'facebook'  => $request->facebook,
            'twitter'   => $request->twitter,
            'instagram' => $request->instagram,
            'youtube'   => $request->youtube,
            'linkedin'  => $request->linkedin,
            'whatsapp'  => $request->whatsapp,
            'telegram'  => $request->telegram,
            'tiktok'    => $request->tiktok,
        ]);
        foreach (SupportedKeys() as $key) :
            KhetabMagazineTranslation::where(['parent_id'=>1,'locale'=>$key])
            ->update([
                'content' => $request->content[$key],
            ]);
        endforeach;
        return back()->with('success', __('global.alert_done_update'));
    }

}