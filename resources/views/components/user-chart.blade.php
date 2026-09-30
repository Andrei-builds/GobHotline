<div class="rounded-lg bg-white p-6 shadow-sm">
    <h2 class="mb-5 text-lg font-semibold text-gray-900">New User Registrations</h2>
    @php($maxCount = max(1, $chartData->max('count')))
    <div class="grid h-56 grid-cols-7 items-end gap-3" role="img" aria-label="User registrations during the last seven days">
        @foreach ($chartData as $day)
            <div class="flex h-full flex-col items-center justify-end gap-2" title="{{ $day['date'] }}: {{ $day['count'] }} registrations">
                <span class="text-xs text-gray-600">{{ $day['count'] }}</span>
                <div class="flex h-40 w-full items-end rounded-sm bg-gray-100">
                    <div class="w-full rounded-sm bg-[#8E0708]" style="height: {{ $day['count'] > 0 ? max(8, ($day['count'] / $maxCount) * 100) : 0 }}%"></div>
                </div>
                <span class="text-xs text-gray-500">{{ $day['label'] }}</span>
            </div>
        @endforeach
    </div>
</script>
</div>