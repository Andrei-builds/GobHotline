<x-layout>

    <main class="flex min-h-screen">

        <div class="w-1/2 bg-red-500">

            <img
                src="{{ asset('images/login.jpg') }}"
                class="w-full h-full object-cover"
            >

        </div>

        <div class="w-1/2 flex flex-col items-center justify-center p-10 bg-white">

            <div class="w-full max-w-md mb-8">
                <h1 class="text-3xl font-bold">
                    Login
                </h1>

                <p class="text-gray-500 mt-2">
                    Sign in to your account
                </p>
            </div>


            <form action="/login" method="POST" class="w-full max-w-md">

                @csrf

                <div class="flex flex-col mb-4">

                    <label for="email" class="mb-2 font-medium">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="border rounded-lg p-3"
                        placeholder="Enter your email"
                    >

                </div>

                <div class="flex flex-col mb-4">

                    <label for="password" class="mb-2 font-medium">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="border rounded-lg p-3"
                        placeholder="Enter your password"
                    >

                </div>


                <div class="flex items-center gap-2 mb-6">

                    <input
                        type="checkbox"
                        name="remember"
                        id="remember"
                    >

                    <label for="remember">
                        Remember me
                    </label>

                </div>


                <button
                    type="submit"
                    class="w-full bg-red-700 text-white py-3 rounded-lg hover:bg-red-800"
                >
                    Login
                </button>

            </form>

        </div>

    </main>

</x-layout>