<x-master>
    <div class="container mx-auto mb-8 flex justify-center">
        <div class="lg:px-16 py-8 border border-gray-300 bg-gray-200 rounded-lg">
            <div class="col-md-8">
                <div class="col-md-8">
                    <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="name">
                                Name
                            </label>
                            <input class="border border-gray-400 p-2 w-full"
                                   type="text"
                                   name="name"
                                   id="name"
                                   required
                            >
                            @error('name')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="username">
                                User Name
                            </label>
                            <input class="border border-gray-400 p-2 w-full"
                                   type="text"
                                   name="username"
                                   id="username"
                                   value="{{ old("username") }}"
                                   required
                            >
                            @error('username')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="email">
                                Email
                            </label>
                            <input class="border border-gray-400 p-2 w-full"
                                   type="email"
                                   name="email"
                                   id="email"
                                   value="{{ old("email") }}"
                                   autocomplete="email"
                                   required
                            >
                            @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="password">
                                Password
                            </label>
                            <input class="border border-gray-400 p-2 w-full"
                                   type="password"
                                   name="password"
                                   id="password"
                                   required
                            >
                            @error('password')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="password_confirmation">
                                Password Confirmation
                            </label>
                            <input class="border border-gray-400 p-2 w-full"
                                   type="password"
                                   name="password_confirmation"
                                   id="password_confirmation"
                                   required
                            >
                            @error('password_confirmation')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <button type="submit"
                                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                            >
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-master>
