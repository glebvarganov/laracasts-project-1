@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img
            src="/images/profile-background.jpg"
            alt="Profile backgroud picture"
            class="rounded rounded-lg mb-2"
        />
        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-2">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a class="rounded-full border border-gray-300 py-2 px-4 text-black text-sm mr-2" href="#">Edit profile</a>
                @if(auth()->user()->id != $user->id)
                    <a class="bg-blue-500 rounded-full border border-gray-300 py-2 px-4 text-white text-sm" href="#">Follow me</a>
                @endif
            </div>
        </div>

        <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nulla diam, luctus quis luctus
            faucibus, convallis in diam. Cras ornare congue lorem vitae tincidunt. Donec ut convallis nisl, vitae
            hendrerit augue. Sed posuere ligula vel consectetur consectetur. Nulla semper eu felis sit amet imperdiet.
            Vestibulum tempor posuere venenatis.</p>

        <img
            src="{{ $user->getAvatarAttribute(150) }}"
            alt="Your avatar"
            class="rounded-full mr-2 absolute"
            style="width: 150px; left: calc(50% - 75px); top: 160px"
        />


    </header>

    @include('_timeline', ['tweets' => $user->tweets])
@endsection
