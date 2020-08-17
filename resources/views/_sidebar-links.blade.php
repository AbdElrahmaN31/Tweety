<ul>
    <li>
        <a class="font-bold text-lg mb-4 block"
           href="{{route('home')}}"
        >Home</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block"
           href="/explore"
        >Explore</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block"
           href="{{route('profile', current_user())}}"
        >Profile</a>
    </li>
    <li>
        <form action="/logout" method="post">
            @csrf
            <button class="font-bold text-lgw">Logout</button>
        </form>
    </li>
</ul>
