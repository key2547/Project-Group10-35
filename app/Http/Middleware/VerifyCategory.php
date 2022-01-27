<?php

namespace App\Http\Middleware;

use Closure;
use App\Category;

class VerifyCategory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        {
            if(Category::all()->count()==0){
                $notification = array(
                    'message' => 'ต้องมีประเภทบริการอย่างน้อย 1 รายการ',
                    'alert-type' => 'error'
                );
                return redirect()->route('index.category')->with($notification);
            }
            return $next($request);
        }
    }
}
