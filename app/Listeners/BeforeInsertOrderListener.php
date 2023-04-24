<?php

namespace App\Listeners;

use App\Events\BeforeInsertOrderEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BeforeInsertOrderListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\BeforeInsertOrderEvent  $event
     * @return void
     */
    public function handle(BeforeInsertOrderEvent $event)
    {
        // Lấy giá trị order_total từ đối tượng order
        $orderTotal = $event->order['order_total'];

        // Xóa định dạng số bằng hàm str_replace
        $orderTotal = str_replace(',', '', $orderTotal);

        // Gán lại giá trị đã xóa định dạng số vào đối tượng order
        $event->order['order_total'] = $orderTotal;
    }
}
