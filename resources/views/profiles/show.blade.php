@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img src="/images/default-profile-banner.jpg"
             alt=""
             class="mb-2"
        >
        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div>
                <a class="rounded-full border border-gray-300 py-2 px-4 text-black lg:origin-bottom-left text-xs mr-2">Edit
                    Profile</a>
                <a class="bg-blue-500 rounded-full border border-gray-300 py-2 px-4 text-white lg:origin-bottom-left text-xs">Follow
                    me</a>
            </div>
        </div>
        <p class="text-sm">
            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections
            1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact
            original form, accompanied by English versions from the 1914 translation by H. Rackham.
        </p>
        <img
            src="{{$user->avatar}}"
            class="rounded-full mr-2 absolute"
            style="width: 150px; left: calc(50% - 75px); top: 138px"
            alt={{ $user->name }}
        >
    </header>

    @include('_timeline',[
        'tweets' => $user->tweets
    ])
@endsection
