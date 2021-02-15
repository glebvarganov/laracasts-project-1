<ul>
    <li class="font-bold text-lg mb-4 block"><a href="{{ route('home') }}">Home</a></li>
    <li class="font-bold text-lg mb-4 block"><a href="/explore">Explore</a></li>
    <li class="font-bold text-lg mb-4 block"><a href="{{ route('profile', auth()->user()->username) }}">Profile</a></li>
    <li class="font-bold text-lg mb-4 block">
        <form method="POST" action="/logout">
            @csrf
            <button class="font-bold text-lg mb-4 block">Logout</button>
        </form>
    </li>
</ul>
