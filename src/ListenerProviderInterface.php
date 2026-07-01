<?php

declare(strict_types=1);

namespace Klax\EventDispatcher\Contract;

use Psr\EventDispatcher\ListenerProviderInterface as PsrListenerProviderInterface;

interface ListenerProviderInterface extends PsrListenerProviderInterface
{
    public function addListener(string $eventName, callable $listener): void;

    /**
     * @param array<callable> $listeners
     */
    public function addListeners(string $eventName, array $listeners): void;
}
