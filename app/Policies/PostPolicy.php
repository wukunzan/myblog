<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;

class PostPolicy extends Policy
{
    public function update(User $user, Post $post)
    {
         return $user->isAuthorOf($post);
    }

    public function destroy(User $user, Post $post)
    {
        return $user->isAuthorOf($post);
    }
    public function create(User $user)
    {
        return $user->can('manage_contents');
    }
}
