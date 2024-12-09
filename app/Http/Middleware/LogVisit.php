<?php

namespace App\Http\Middleware;

use App\Models\Visit;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LogVisit
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (auth()->guest() && $response instanceof \Illuminate\Http\Response) {
            if ($response->getStatusCode() !== 404) {
                $ipAddress = $request->ip();
                $timezone = 'Asia/Jakarta';
                $visitedAt = now()->setTimezone($timezone);

                try {
                    $apiResponse = Http::timeout(30)->get("http://ip-api.com/json/{$ipAddress}");

                    if ($apiResponse->successful()) {
                        $data = $apiResponse->json();

                        $country = isset($data['status']) && $data['status'] === 'success'
                            ? "{$data['city']}, {$data['regionName']}"
                            : 'Unknown Location';
                    } else {
                        $country = 'Unknown Location';
                    }

                    Log::info('IP API Response', $data);

                    Visit::create([
                        'ip_address' => $ipAddress,
                        'country' => $country,
                        'visited_at' => $visitedAt,
                    ]);
                } catch (\Exception $e) {
                    Log::error('IP API Request Failed', ['ip' => $ipAddress, 'error' => $e->getMessage()]);
                }
            }
        }

        if ($response instanceof \Illuminate\View\View) {
            return response($response);
        }

        return $response;
    }
}
