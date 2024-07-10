<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Admin;
use App\Models\Group;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('authadmin:profile_edit')->only('profile', 'UpdateProfile');
        
        $this->middleware('authadmin:admin_show')->only('json','index');
        $this->middleware('authadmin:admin_create')->only('create','store');
        $this->middleware('authadmin:admin_edit')->only('edit', 'update');
        $this->middleware('authadmin:admin_delete')->only('destroy');
    }


    public function json()
    {
        $query = Admin::select('id','name','email','main','group_id','created_at')
        ->with('group:id,name')->get();
        return datatables($query)->editColumn('created_at', function ($row) {
            return $row->created_at;
        })->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admins.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::select('id','name')->get();
        return view('admin.admins.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|max:30|unique:admins',
            'password' => 'required|string|min:6|max:32',
            'group_id' => 'required|exists:groups,id',
            'info' => 'nullable|string|max:255',
            'img' => 'nullable|string|max:100',
        ]);

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->info = nl2br($request->info);
        $admin->img = $request->img;
        $admin->group_id = $request->group_id;
        $admin->save();

        return redirect('/admin/admins')->with('success', __('global.alert_done_create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        $groups = Group::select('id','name')->get();
        return view('admin.admins.edit', compact('groups','admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:admins,email,'.$admin->id,
            'info' => 'nullable|string|max:255',
            'img' => 'nullable|string|max:100',
            'group_id' => 'required|integer|exists:groups,id',
        ]);

        if( empty($request->password) ):
            $password = $admin->password;
        else:
            $validatedData = $request->validate([
                'password' => 'required|string|min:6|max:32',
            ]);
            $password = bcrypt($request->password);
        endif;
        Admin::where('id', $admin->id)
        ->update([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => $password,
            'info'      => nl2br($request->info),
            'img'       => $request->img,
            'group_id'  => $request->group_id,
        ]);
        return redirect('/admin/admins')->with('success', __('global.alert_done_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        if ( $admin->main == 'main' ) {
            return redirect('/admin/admins')->with('error', __('global.alert_main_admin'));
        }else {
            $admin->delete();
            return redirect('/admin/admins')->with('success', __('global.alert_done_delete'));
        }
    }


    public function profile()
    {   
        $admin = auth('admin')->user();
        return view('admin.admins.profile', compact('admin'));
    }
    
    public function UpdateProfile(Request $request)
    {   
        $admin = auth('admin')->user();
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:admins,email,'.$admin->id,
            'info' => 'nullable|string|max:255',
            'img' => 'nullable|string|max:100',
        ]);

        if( empty($request->password) ):
            $password = $admin->password;
        else:
            $validatedData = $request->validate([
                'password' => 'required|string|min:6|max:32',
            ]);
            $password = bcrypt($request->password);
        endif;

        Admin::where('id', $admin->id)
        ->update([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => $password,
            'info'      => nl2br($request->info),
            'img'       => $request->img,
        ]);
        return back()->with('success',  __('global.alert_done_update'));
    }

}
