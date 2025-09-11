<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = session('locale');

        // Optional: fallback to browser preferred language if nothing in session
        if (! $locale) {
            $preferred = $request->getPreferredLanguage(['fr', 'en']);
            $locale = $preferred ?: config('app.locale');
            // don't persist auto-detected locale; only persist on explicit switch
        }

        app()->setLocale($locale);

        return $next($request);
    }
}
