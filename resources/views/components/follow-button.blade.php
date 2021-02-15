@if(current_user()->isNot($user))
    <form method="POST" action="{{ route('follow', $user) }}">
        @csrf
        <button
            type="submit"
            class="bg-blue-500 rounded-full border border-gray-300 py-2 px-4 text-white text-sm"
        >
            {{ current_user()->isFollowing($user) ? 'Unfollow me' : 'Follow me' }}
        </button>
    </form>
@endif
