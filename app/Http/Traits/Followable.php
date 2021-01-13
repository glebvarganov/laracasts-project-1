<?php


namespace App\Http\Traits;

use App\Models\User;

trait Followable
{
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function toogleFollow(User $user)
    {
        if ($this->isFollowing($user)) {
            return $this->unfollow($user);
        }

        return $this->follow($user);
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function isFollowing(User $user)
    {
        // Плохо, потому что получаем всю коллекцию
        // return $this->follows->contains($user);

        // Хорошо, потому что делаем выборку и проверяем на содержанием
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }
}
