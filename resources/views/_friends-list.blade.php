<div class="bg-gray-200 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    <ul>
        @forelse(current_user()->follows as $user)
            <li class="mb-4">
                <a href="{{ route('profile', $user) }}"
                   class="flex items-center text-sm">
                    <img src="{{ $user->avatar }}"
                         class="rounded-full mr-2"
                         alt="{{ $user->name }}"
                         style="width: 40px; height: 40px"
                    >
                    {{ $user->name }}
                </a>
            </li>
        @empty
            <li>No Follows Yet!</li>
        @endforelse
    </ul>
</div>
