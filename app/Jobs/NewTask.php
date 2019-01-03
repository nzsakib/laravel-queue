<?php

namespace App\Jobs;

use App\Task;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class NewTask implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user, $task;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user, Task $task)
    {
        $this->user = $user;
        $this->task = $task;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        sleep(5);
        $this->task->status = 1;
        $this->task->save();
        // $task = Task::where('id', $this->taskId)->update(['status' => 1]);
    }
}
