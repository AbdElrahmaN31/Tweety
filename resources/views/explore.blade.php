<x-app>
    <div>
        @foreach($users as $user)
            <a href="{{ $user->path() }}"
               class="flex items-center mb-5">
                <img src="{{ $user->avatar }}"
                     alt="{{ $user->username }}'s avatar"
                     width="60px"
                     class="rounded mr-4">
                <div>
                    <h4 class="text-">{{ $user->name }}</h4>
                    <h6 class="text-sm">{{ '@'. $user->username }}</h6>
                </div>
            </a>
        @endforeach
        {{ $users->links() }}
    </div>
</x-app>
