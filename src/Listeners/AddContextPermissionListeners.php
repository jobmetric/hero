<?php

namespace JobMetric\Hero\Listeners;

use JobMetric\Rolix\Events\RegisterPathPermissionEvent;
use Throwable;

class AddContextPermissionListeners
{
    /**
     * Handle the event.
     * @throws Throwable
     */
    public function handle(RegisterPathPermissionEvent $event): void
    {
        $event->addPath('hero', __DIR__ . '/../../permissions.php');
    }
}
