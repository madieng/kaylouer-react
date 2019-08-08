<?php

namespace App\Events;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use ApiPlatform\Core\EventListener\EventPriorities;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use App\Entity\User;
use App\Entity\Ad;

class CreatedAtSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::VIEW => ['setCreatedAt', EventPriorities::PRE_VALIDATE]
        ];
    }

    public function setCreatedAt(ViewEvent $event)
    {
        $entity = $event->getControllerResult();
        $method = $event->getRequest()->getMethod();

        if (($entity instanceof User || $entity instanceof Ad) && $method == 'POST') {
            $entity->setCreatedAt(new \DateTime());
        }
    }
}
