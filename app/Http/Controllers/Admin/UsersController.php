<?php namespace App\Http\Controllers\Admin;

//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
//use Illuminate\Support\Facades\Request;

class UsersController extends Controller {
    
        public function __construct() {
            $this->middleware('auth');
        }

        /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{      
            $users = User::all();
            return view('admin.users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateUserRequest $request)
	{
           
            $user = new User($request->all());
            $user->save();
            return \Redirect::route('admin.users.index');           
            //            $data = Request::all();
            //            $rules = array(
            //                'first_name'=>'required',
            //                'last_name'=>'required',
            //                'email'=>'required',
            //                'password'=>'required',
            //                'type'=>'required'
            //                );
            //            
            //            $validation = \Validator::make($data,$rules);
            //             if($validation->fails()){
            //                 
            //                 return redirect()->back()
            //                                  ->withErrors($validation->errors())
            //                                  ->withInput(Request::except('password'));
            //                  
            //             }
            //            $user = new User();
            //            $user->save();
            //            
            //            return \Redirect::route('admin.users.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $user = User::findOrFail($id);
            return view('admin.users.edit',  compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditUserRequest $request,$id)
	{
		$user = User::findOrFail($id);
                $user->fill($request->all());
                $user->save();
                \Session::flash('message',$user->full_name .' '. trans('validation.register.update'));
                return \Redirect::back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{ 
            //abort(500);
            $user = User::findOrFail($id);
            $user->delete();
            
            $message = $user->full_name .' '. trans('validation.register.delete');
            
            if(\Request::ajax()){
                
                return response()->json([
                    'id' => $user->id,
                    'message' => $message
                ]);
            }
            
            
            \Session::flash('message', $message );
            return \Redirect::route('admin.users.index');
	}

}
