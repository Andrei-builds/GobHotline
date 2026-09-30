<x-sidebar>
    <div class="bg-[#F7F7F6] px-10 py-6" data-dashboard-role="{{ $dashboardRole }}">
        <h1 class="mb-5 text-2xl font-semibold text-gray-900">{{ $dashboardTitle }}</h1>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
            <x-stat-card title="Users" :value="$stats['totalUsers']" description="Registered users" />
            <x-stat-card title="This Month" :value="$stats['newThisMonth']" description="New registrations" />
            <x-stat-card title="Today" :value="$stats['registeredToday']" description="New registrations" />
        </div>
    </div>

    <div class="grid grid-cols-1 gap-6 bg-[#F7F7F6] px-10 pb-10 lg:grid-cols-10">
        <div class="space-y-6 lg:col-span-7">
            <x-user-chart :chart-data="$chartData" />
            <x-event-logs :users="$recentUsers" />
        </div>

        <div class="space-y-6 lg:col-span-3">
            <x-stat-card title="Verified Emails" :value="$stats['verifiedUsers']" description="User accounts" />
            <x-stat-card title="Pending Verification" :value="$stats['unverifiedUsers']" description="User accounts" />
            <x-event-logs :users="$recentUsers" />
        </div>
    </div>

</x-sidebar>
