@if(auth()->user()->id != $user->id)
    <form method="POST" action="/profiles/{{ $user->name }}/follow">
        @csrf
        <button
            type="submit"
            class="bg-blue-500 rounded-full border border-gray-300 py-2 px-4 text-white text-sm"
        >
            {{ auth()->user()->isFollowing($user) ? 'Unfollow me' : 'Follow me' }}
        </button>
    </form>
@endif
