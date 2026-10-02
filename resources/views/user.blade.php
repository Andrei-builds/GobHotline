<x-sidebar>
<main class="px-10 py-6 bg-[#F7F7F6]">
    <div class="grid grid-cols-10 grid-rows-[min-content] gap-6">

        <div class="col-span-10">
            <div class="flex justify-between pb-5">
                <h1 class="flex items-center pb-10 text-2xl font-semibold ">User Management</h1>  

                <button class="bg-white outline-black px-5 py-5 rounded-lg">
                    Create User
                </button>
            </div>
            <div class="flex gap-6">
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

    <div class="col-span-10 h-120 bg-blue-400 p-5">

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
</main>
</x-sidebar>