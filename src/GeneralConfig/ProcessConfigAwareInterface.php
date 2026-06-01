<?php

declare(strict_types=1);

/*
 * This file is part of the TODO Registrar Contracts project.
 *
 * (c) Anatoliy Melnikov <5785276@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Aeliot\TodoRegistrarContracts\GeneralConfig;

interface ProcessConfigAwareInterface
{
    /**
     * NOTE: It must not return null, but leave 'as is' for backward compatibility.
     *       Going to make not nullable.
     */
    public function getProcessConfig(): ?ProcessConfigInterface;
}
