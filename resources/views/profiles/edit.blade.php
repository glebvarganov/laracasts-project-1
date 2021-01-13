<x-app>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <h3 class="font-bold text-xl mb-4">Edit my profile</h3>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Name</label>
            <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name" value="{{ $user->name }}" required />
            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">Username</label>
            <input class="border border-gray-400 p-2 w-full" type="text" name="username" id="username" value="{{ $user->username }}" required />
            @error('username')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="avatar">Avatar</label>

            <div class="flex items-center">
                <img src="{{ $user->avatar }}" class="rounded rounded-lg mr-4" width="50" height="50" alt="Your avatar" />
                <input class="border border-gray-400 p-2 w-full" type="file" name="avatar" id="avatar" value=""/>
            </div>

            @error('avatar')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email address</label>
            <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" value="{{ $user->email }}" required />
            @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>
            <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" required />
            @error('password')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password_confirmation">Password Confirmation</label>
            <input class="border border-gray-400 p-2 w-full" type="password" name="password_confirmation" id="password_confirmation" required />
            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">Save profile</button>
        </div>
    </form>
</x-app>
