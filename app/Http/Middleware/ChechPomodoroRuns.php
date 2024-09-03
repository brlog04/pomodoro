<?php

namespace App\Http\Middleware;

use App\Models\Pomodoros;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpFoundation\Response;

class ChechPomodoroRuns
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $now = Carbon::now();
        $pomodoros = Pomodoros::where('start', '>', $now)->count();
        if ($pomodoros > 0){
            view()->share('poruka','postoji aktivan pomodoro');
        }
        return $next($request);
    }
}
