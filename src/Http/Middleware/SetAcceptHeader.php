<?php

/*
 * This file is part of the tomeet/laravel-response.
 *
 * (c) Tomeet <tomeet@souhu.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Tomeet\Response\Laravel\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SetAcceptHeader
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $type
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next, string $type = 'json')
    {
        Str::contains($request->header('Accept'), $contentType = "application/$type") or
        $request->headers->set('Accept', $contentType);

        return $next($request);
    }
}
