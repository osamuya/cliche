<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Http\Exceptions\MaintenanceModeException;

class CheckForMaintenanceMode
{
    /**
     * The application implementation.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected $app;
    
    
    public function __construct(Application $app)
    {
        $this->app = $app;
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
        if ($this->app->isDownForMaintenance()) {
            echo "<!--Under maintenance mode-->\n";
            $ip = $request->getClientIp();
            $allowIp = explode(',', env('MAINTENANCE_IP'));
            if (!is_array($allowIp) || !in_array($ip, $allowIp)) {
                abort(503);
            }
        }
        return $next($request);
    }
}
