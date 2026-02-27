<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class notifyLiveTrading implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $trading,$transporters;
    public function __construct($trading,$transporters)
    {
        $this->trading = $trading;
        $this->transporters = $transporters;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn(){
//        return new PrivateChannel('broadcast-activities');
        return ['NotifyLiveTrading.'. 1];
    }

    public function broadcastAs(){
        return 'livetrading-created';
    }
}
