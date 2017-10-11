<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class IsType {

    /**
     * @var Guard
     */
    private $auth;

    public function __construct(Guard $auth) {
        
        $this->auth = $auth;
    }

    /**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
            if($this->auth->user()->isType() != 'admin')
                {
            
                        if ($request->ajax())
			{
				return response('Unauthorized.', 401);
			}
			else
			{
                                \Session::flash('message','No Tiene Permisos Para entrar en esta Area');
				return redirect()->guest('home');
			}
              
                
               
            }
		return $next($request);
	}

}
