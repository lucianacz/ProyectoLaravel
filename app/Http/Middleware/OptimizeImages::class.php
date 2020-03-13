<?php

namespace App\Http\Middleware;

use Closure;
use ImageOptimizer;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class OptimizeImages::class
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

  app(Spatie\ImageOptimizer\OptimizerChain::class)->optimize($pathToImage);

    public function handle($request, Closure $next)
    {
        ImageOptimizer::optimize($pathToImage);
        return $next($request);
    }
}
