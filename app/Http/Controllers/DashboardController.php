<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function index(){
        if (Auth::check() && Auth::user()->status == 1) {
            return view('admin.dashboard');
        }
        Auth::logout();
        return redirect()->route('login');

    }


    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $getData = User::latest('id');
            // dd($getData)->toArray();

            return DataTables::eloquent($getData)
            ->addIndexColumn()
            ->addColumn('operation', function($user){
                $operation = '
                    <a href="' . route('admin.user.edit', $user->id) . '" id="edit-btn" class="btn btn-success btn-sm">Edit</a>
                    <button data-id="'.$user->id.'" id="delete-btn" class="btn btn-danger btn-sm">Delete</button>
                ';
                return $operation;
            })

            ->addColumn('status', function($user){
                $checked = $user->is_active == 1 ? 'checked':'' ;
                return '<div class = "toggle-switch">
                            <label class="switch-label" for="status'.$user->id.'">
                            <input type = "checkbox" name="status" class="input-status" data-id="'.$user->id.'" id="status'.$user->id.'"'.$checked.'>
                                <span class = "pr-2 text-right switch_slider"> <span style="padding-right:15px">OFF</span> </span>
                                <span class = "switch_slider">ON</span>
                            </label>
                        </div> ';
            })

            ->addColumn('created_at', function($user){
                return date('d-m-Y', strtotime($user->created_at));
            })

            ->rawColumns(['operation','created_at','status'])
            ->make(true);


        }
    }


    public function userActive(Request $request){
        if ($request->ajax()) {
            $status = User::find($request->row_id);
            $status->update([
                'is_active' => $request->status_id,
            ]);

        }
    }


    public function edit($id){
        $user_edit = User::findOrFail($id);
        return view('admin.edit',compact('user_edit'));
    }



    public function update(Request $request, $id){


        // $validate = $request->validate([
        //     'name'     => 'required',
        //     'email'    => 'required'|'email'|'unique:users',
        //     'phone'    => 'required'|'max:20',
        //     'district' => 'required',
        //     'country'  => 'required'
        // ]);

        $user_update_id = User::findOrFail($id);

        $user_update_id->update([
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'district' => $request->district,
            'country'  => $request->country
        ]);

        return back();

    }





    public function destroy(Request $request)
    {

        if ($request->ajax()) {
            $user_id = User::find($request->row_id);
            $user_id->delete();
        }


        $message = ['status'=>'success','message'=>'Data has been Delete'];

        return response()->json($message);
    }



    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }




}
