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

namespace Aeliot\TodoRegistrarContracts;

use Aeliot\TodoRegistrarContracts\GeneralConfig\ProcessConfigAwareInterface;

/**
 * @deprecated use {@see ProcessConfigAwareInterface }
 */
interface ProcessAwareGeneralConfigInterface extends ProcessConfigAwareInterface
{
    public function getProcessConfig(): ?ProcessConfigInterface;
}
