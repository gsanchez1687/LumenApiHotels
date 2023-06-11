<?php

namespace App\Http\Middleware;

use Closure;

class CleanRequestMiddleware
{
    public function handle($request, Closure $next)
    {
        $input = $request->all();

        // Limpiar los campos del request
        $cleanedInput = $this->clean($input);

        // Reemplazar los campos del request con los campos limpios
        $request->replace($cleanedInput);

        return $next($request);
    }

    private function clean($input)
    {
        array_walk_recursive($input, function (&$value) {
            $value = strip_tags(trim($value));
        });

        return $input;
    }
}