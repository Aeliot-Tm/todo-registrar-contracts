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
 * Service responsible for the catching of inline config comment content.
 *
 * The main purpose: support of custom inline config formats.
 */
interface InlineConfigReaderInterface
{
    /**
     * Raw content of issue description passed to it.
     *
     * @return array<array-key,mixed>
     */
    public function getInlineConfig(string $input): array;
}
