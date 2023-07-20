<?php

namespace App\Observers;

use App\Models\Post2;
use App\Jobs\SendMail;

class PostObserver
{
    /**
     * Handle the Post2 "created" event.
     */
    public function created(Post2 $post2): void
    {
        SendMail::dispatch();
    }

    /**
     * Handle the Post2 "updated" event.
     */
    public function updated(Post2 $post2): void
    {
        //
    }

    /**
     * Handle the Post2 "deleted" event.
     */
    public function deleted(Post2 $post2): void
    {
        //
    }

    /**
     * Handle the Post2 "restored" event.
     */
    public function restored(Post2 $post2): void
    {
        //
    }

    /**
     * Handle the Post2 "force deleted" event.
     */
    public function forceDeleted(Post2 $post2): void
    {
        //
    }
}
