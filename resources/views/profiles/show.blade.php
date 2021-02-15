<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img
                src="/images/profile-background.jpg"
                alt="Profile backgroud picture"
                class="rounded rounded-lg mb-2"
            />

            <img
                src="{{ $user->avatar }}"
                alt="Your avatar"
                class="rounded-full mr-2 absolute bottom-0"
                width="150"
                style="left: 50%; transform: translate(-50%, 50%);"
            />
        </div>

        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px;">
                <h2 class="font-bold text-2xl mb-2">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex items-center">
                @can('edit', $user)
                    <a
                        class="rounded-full border border-gray-300 py-2 px-4 text-black text-sm mr-2"
                        href="{{ $user->path('edit') }}">
                        Edit profile
                    </a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nulla diam, luctus quis luctus
            faucibus, convallis in diam. Cras ornare congue lorem vitae tincidunt. Donec ut convallis nisl, vitae
            hendrerit augue. Sed posuere ligula vel consectetur consectetur. Nulla semper eu felis sit amet imperdiet.
            Vestibulum tempor posuere venenatis.</p>

    </header>

    @include('_timeline', ['tweets' => $tweets])
</x-app>
