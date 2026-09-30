<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $dashboardRole = auth()->user()?->getAttribute('role');
        $profiles = [
            'superadmin' => ['title' => 'System Overview'],
            'team leader' => ['title' => 'Team Overview'],
            'staff' => ['title' => 'Staff Overview'],
        ];
        $profile = $profiles[$dashboardRole] ?? null;

        $today = today();
        $monthStart = $today->copy()->startOfMonth();
        $chartStart = $today->copy()->subDays(6);
        $registrationsByDate = User::query()
            ->whereBetween('created_at', [$chartStart, $today->copy()->endOfDay()])
            ->selectRaw('DATE(created_at) as registration_date, COUNT(*) as total')
            ->groupBy('registration_date')
            ->pluck('total', 'registration_date');

        $chartData = collect(range(6, 0))->map(function (int $daysAgo) use ($today, $registrationsByDate) {
            $date = $today->copy()->subDays($daysAgo);

            return [
                'label' => $date->format('D'),
                'date' => $date->toDateString(),
                'count' => (int) $registrationsByDate->get($date->toDateString(), 0),
            ];
        });

        $stats = [
            'totalUsers' => User::count(),
            'newThisMonth' => User::whereBetween('created_at', [$monthStart, $today->copy()->endOfDay()])->count(),
            'registeredToday' => User::whereDate('created_at', $today)->count(),
            'verifiedUsers' => User::whereNotNull('email_verified_at')->count(),
            'unverifiedUsers' => User::whereNull('email_verified_at')->count(),
        ];

        return view('dashboard', [
            'dashboardRole' => $dashboardRole,
            'dashboardTitle' => $profile['title'] ?? 'Dashboard',
            'stats' => $stats,
            'chartData' => $chartData,
            'recentUsers' => User::latest()->limit(4)->get(),
        ]);
    }
}
