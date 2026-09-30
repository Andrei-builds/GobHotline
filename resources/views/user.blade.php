<x-sidebar>

    <div class="grid grid-cols-10 grid-rows-2 gap-6 px-10 py-10">

        <div class="col-span-10 h-80 bg-red-400 pt-10">
            <div>
                <h1 class="px-10 pb-10 text-2xl">User Management</h1>     
            </div>
            <div class="flex gap-6 px-10">
                <div class = "flex-1">
                    <x-stat-card
                    title="Team Leaders"             
                    value="2"
                    description="Navigators"
                    />
                </div>
                <div class = "flex-1">
                    <x-stat-card
                    title="Team Leaders"             
                    value="2"
                    description="Navigators"
                    />
                </div>
                <div class = "flex-1">
                    <x-stat-card
                    title="Team Leaders"             
                    value="2"
                    description="Navigators"
                    />
                </div>
                <div class = "flex-1">
                    <x-stat-card
                    title="Team Leaders"             
                    value="2"
                    description="Navigators"
                    />
                </div> 
            </div>
        </div>

    <div class="col-span-6 h-[440px] bg-blue-400 p-5">

        <div class="grid grid-cols-6 gap-5">

            <div class="col-span-6 bg-white h-20">
                {{-- filter --}}
            </div>

            <div class="col-span-6 bg-red-500 h-40">
                {{-- table --}}
            </div>

        </div>

    </div>



    </div>

</x-sidebar>