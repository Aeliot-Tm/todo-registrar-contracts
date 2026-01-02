<?php

declare(strict_types=1);

namespace Aeliot\TodoRegistrarContracts;

interface RegistrarInterface
{
    /**
     * @return string Key of registered ticket.
     */
    public function register(TodoInterface $todo): string;
}
