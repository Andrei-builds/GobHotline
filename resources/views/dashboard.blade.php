<x-sidebar>
        <div class="flex-1 bg-[#F7F7F6] px-10 py-6">
        {{-- stat cards --}}
            <div class="flex flex-col-3 gap-6">

                <div class="flex-1">
                    <x-stat-card
                    title="Users"             
                    value="100"
                    description="Registered Users"
                    />
                </div>

                <div class="flex-1">
                    <x-stat-card
                    title="Users"             
                    value="100"
                    description="Registered Users"
                    />
                </div>
                
                <div class="flex-1">
                    <x-stat-card
                    title="Users"             
                    value="100"
                    description="Registered Users"
                    />
                </div>

            </div>
        </div>

        {{-- Chart + Logs (left side)--}}
            <div class="grid grid-cols-10 gap-6 bg-[#F7F7F6] px-10 pb-10">

                <div class="col-span-7 space-y-6">

                    <div>
                        <x-user-chart />
                    </div>

                    <div>
                        <x-event-logs />
                    </div>

                </div>

        {{-- Chart + Logs (right side)--}}
                <div class="col-span-3 space-y-6">

                    <div>
                        <x-stat-card
                        title="Team Leaders"             
                        value="2"
                        description="Navigators"
                        />
                    </div>

                    <div>
                        <x-stat-card
                        title="Staff"             
                        value="24"
                        description="Team Members"
                        />
                    </div>

                    <div class="flex-1 min-h-0">
                        <x-event-logs>
                        </x-event-logs>
                    </div>

                </div>

            </div>



</x-sidebar>
