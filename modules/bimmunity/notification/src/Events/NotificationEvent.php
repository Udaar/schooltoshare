<?php

namespace Bimmunity\Notification\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NotificationEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $time;
    public $receivers;
    public $message;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($message,$receivers)
    {
       $this->receivers=$receivers;
       $this->message=$message;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return $this->receivers;
    }

    public function broadcastWith()
    {
        return [$this->message];
    }

    public function broadcastAs()
    {
        return 'notification';
    }
}
