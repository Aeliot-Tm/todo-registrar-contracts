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

/**
 * Can be assigned to TODO to provide the hash calculated in the previous steps.
 */
interface HashAwareInterface
{
    public function getHash(): string;
}
