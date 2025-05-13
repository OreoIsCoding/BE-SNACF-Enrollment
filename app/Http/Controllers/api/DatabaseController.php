<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DatabaseController extends Controller
{
    /**
     * Refresh the database with fresh migrations and seed data.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refreshDatabase()
    {
        try {
            // Run migrate:fresh --seed command
            Artisan::call('migrate:fresh', ['--seed' => true]);
            
            return response()->json([
                'message' => 'Database refreshed successfully with seed data',
                'output' => Artisan::output()
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to refresh database',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
