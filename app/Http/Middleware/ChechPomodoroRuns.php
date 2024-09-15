<?php

namespace App\Http\Middleware;

use App\Http\Controllers\PomodoreController;
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
        $pomodoros = Pomodoros::where('start', '<=', $now)->where('end','>=',$now)->count();
        if ($pomodoros > 0){
            //view()->share('poruka','postoji aktivan pomodoro ' . $pomodoros);
            PomodoreController::closeFinishedPomodoros();
            $activePomodoros = Pomodoros::where('start', '<=', $now)->where('end','>=',$now)->get();
            //dd($activePomodoros);
            //dd($now);
            view()->share('poruka','postoji aktivan pomodoro ' . $pomodoros);
            view()->share('data', $activePomodoros);
        }
        return $next($request);
    }
}
