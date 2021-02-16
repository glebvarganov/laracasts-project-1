<?php


namespace App\Http\Traits;


use App\Models\Like;
use App\Models\Tweet;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

trait Likable
{

    public function likes()
    {
        return $this->hasMany(Like::class)->where('liked', true);
    }

    public function dislikes()
    {
        return $this->hasMany(Like::class)->where('liked', false);
    }

    public function isDislikedBy(User $user)
    {
        //return $this->dislikes()->where('user_id', $user->id)->exists();

        return (bool)$user->likes
            ->where('tweet_id', $this->id)
            ->where('liked', false)
            ->count();
    }

    public function like($user = null, $liked = true)
    {
        $userId = $user ? $user->id : auth()->id();
        $like = Like::where('user_id', $userId)->where('tweet_id', $this->id)->first();

        if ($like) {
            $like->update(['liked' => $liked]);
        } else {
            Like::create([
                'user_id' => $userId,
                'tweet_id' => $this->id,
                'liked' => $liked
            ]);
        }
    }

    public function dislike($user = null)
    {
        $this->like($user, false);
    }

    public function isLikedBy(User $user)
    {
        //return $this->likes()->where('user_id', $user->id)->exists();

        return (bool)$user->likes
            ->where('tweet_id', $this->id)
            ->where('liked', true)
            ->count();
    }

    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'select tweet_id, sum(liked) likes, sum(not liked) dislikes from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );

        //  left join (
        //  select tweet_id, sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id
        //) likes on likes.tweet_id = tweets.id;
    }
}
