<div>
    <div class="bg-white rounded-lg shadow-sm p-6">

    <div class="flex items-center justify-between mb-6">
        <h2 class="text-lg font-semibold text-gray-800">
            Event Logs
        </h2>

        <a href="#" class="text-sm text-[#8E0708] hover:underline">
            View All
        </a>
    </div>

    <div class="space-y-5">
        @forelse ($users as $user)
            <div class="flex gap-4">
                <div class="mt-2 h-2 w-2 rounded-full bg-[#8E0708]"></div>
                <div class="min-w-0">
                    <p class="truncate text-sm font-medium text-gray-800">New user registered</p>
                    <p class="mt-1 truncate text-xs text-gray-500">{{ $user->name }} created an account</p>
                    <p class="mt-1 text-xs text-gray-400">{{ $user->created_at->diffForHumans() }}</p>
                </div>
            </div>
        @empty
            <p class="text-sm text-gray-500">No users have registered yet.</p>
        @endforelse
    </div>
</div>
</div>