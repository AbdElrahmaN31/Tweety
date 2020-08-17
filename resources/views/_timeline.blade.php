<div class="border border-gray-300 rounded-lg">
    @forelse($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="py-4 px-2">No Tweets Yet!</p>
    @endforelse
            {{ $tweets->links() }}
</div>
