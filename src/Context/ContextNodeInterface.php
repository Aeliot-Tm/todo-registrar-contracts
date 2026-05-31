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

namespace Aeliot\TodoRegistrarContracts\Context;

/**
 * Represents a single element in the context hierarchy.
 */
interface ContextNodeInterface
{
    public function getKind(): string;

    public function getName(): ?string;
}
