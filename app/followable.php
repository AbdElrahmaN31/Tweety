<?php


    namespace App;


    trait followable
    {
        public function follows()
        {
            return $this->belongsToMany(
                User::class,
                'follows',
                'user_id',
                'following_user_id'
            );
        }

        public function following(User $user)
        {
            return $this->follows()->where('following_user_id', $user->id)
                ->exists();
        }

        public function follow(User $user)
        {
            return $this->follows()->save($user);
        }

        public function unfollow(User $user)
        {
            return $this->follows()->detach($user);
        }

        public function toggleFollowing(User $user)
        {
          $this->follows()->toggle($user);
        }
    }
