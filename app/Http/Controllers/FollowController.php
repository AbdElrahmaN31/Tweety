<?php

    namespace App\Http\Controllers;

    use App\User;

    class FollowController extends Controller
    {
        public function store(User $user)
        {
            current_user()->toggleFollowing($user);
            return back();
        }
    }
