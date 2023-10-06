<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if($guard === 'admin'){
                    return redirect()->route('admin.home');
                }
                return redirect()->route('user.index');
                // return redirect(RouteServiceProvider::HOME);
            }
        }

        if (Auth::guard('web')->check()) {
            $user = Auth::guard('web')->user();
        
            // Cek jika form pendaftaran belum diisi atau status berkas belum lengkap
            if (!$user->form_pendaftaran_diisi() || !$user->status_berkas_lengkap()) {
                // return redirect()->route('form-pendaftaran');
            }
        }

        return $next($request);
    }
}
