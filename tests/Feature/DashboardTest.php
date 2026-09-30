<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_displays_statistics_from_database_users(): void
    {
        User::factory()->create([
            'name' => 'Recent Verified User',
            'created_at' => today()->startOfDay(),
        ]);
        User::factory()->unverified()->create([
            'name' => 'Recent Unverified User',
            'created_at' => now(),
        ]);
        User::factory()->create([
            'name' => 'Older User',
            'created_at' => today()->startOfMonth()->subDay(),
        ]);

        $response = $this->get(route('dashboard.index'));

        $response->assertOk()
            ->assertViewHas('dashboardRole', null)
            ->assertViewHas('dashboardTitle', 'Dashboard')
            ->assertViewHas('stats', function (array $stats): bool {
                return $stats['totalUsers'] === 3
                    && $stats['newThisMonth'] === 2
                    && $stats['registeredToday'] === 2
                    && $stats['verifiedUsers'] === 2
                    && $stats['unverifiedUsers'] === 1;
            })
            ->assertViewHas('chartData', fn ($chartData): bool => $chartData->count() === 7)
            ->assertSee('Recent Verified User')
            ->assertSee('Recent Unverified User')
            ->assertSee('New User Registrations');
    }

    #[DataProvider('roleProfiles')]
    public function test_dashboard_selects_a_profile_for_each_supported_role(string $role, string $title): void
    {
        $user = User::factory()->create();
        $user->setAttribute('role', $role);

        $this->actingAs($user)
            ->get(route('dashboard.index'))
            ->assertOk()
            ->assertViewHas('dashboardRole', $role)
            ->assertViewHas('dashboardTitle', $title);
    }

    public static function roleProfiles(): array
    {
        return [
            'superadmin' => ['superadmin', 'System Overview'],
            'team leader' => ['team leader', 'Team Overview'],
            'staff' => ['staff', 'Staff Overview'],
        ];
    }
}