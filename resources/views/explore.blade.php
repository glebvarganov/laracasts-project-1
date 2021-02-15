<x-app>
    @foreach($users as $user)
        <a href="{{ $user->path() }}"><div class="flex items-center mb-4">

            <img src="{{ $user->avatar }}" alt="{{ $user->name }}'s avatar" width="60" height="60" class="mr-4 rounded rounded-lg" />
            <div>
                <h4 class="font-bold">{{ '@' . $user->name }}</h4>
            </div>

        </div></a>
    @endforeach

    {{ $users->links() }}
</x-app>
