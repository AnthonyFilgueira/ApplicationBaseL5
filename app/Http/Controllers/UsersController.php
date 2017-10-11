<?php  namespace App\Http\Controllers;

use App\User;
class UsersController extends Controller {
        public function getOrm(){
            
            $users = User::select('id','first_name','last_name')
                    ->with('profile')
                    //->where('first_name','<>','Anthony')
                    //->orderBy('first_name','ASC')
                    ->get();
            
            //dd($result->full_name);
            //dd($result->getFullNameAttribute());
            //dd($user->profile->age);
            // dd($users->toArray());
            dd($users->toArray());
        }

        
	public function getIndex()
	{
		$result = \DB::table('users')
                        ->select(
                                'users.*',
                                
                                'user_profiles.id as profile_id',
                                'user_profiles.twitter',
                                'user_profiles.birthdate'
                                )
                        //->where('first_name','<>','Anthony')
                        ->orderBy('id','ASC')
                        ->join('user_profiles','users.id','=','user_profiles.user_id')
                        ->get();
                foreach ($result as $row){
                    
                    $row->full_name =$row->first_name.' '.$row->last_name;
                    $row->age = \Carbon\Carbon::parse($row->birthdate)->age;
                }
                
                dd($result);
                return $result;
	}
        
}