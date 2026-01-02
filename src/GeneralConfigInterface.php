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

interface GeneralConfigInterface
{
    public function getFinder(): FinderInterface;

    public function getInlineConfigFactory(): ?InlineConfigFactoryInterface;

    public function getInlineConfigReader(): ?InlineConfigReaderInterface;

    /**
     * @return array<string,mixed>
     */
    public function getRegistrarConfig(): array;

    /**
     * Returns:
     * - name of supported registrar (enum value)
     * - instance of registrar factory
     * - class-string of registrar factor (instance will be created internally)
     */
    public function getRegistrarType(): RegistrarFactoryInterface|string;

    /**
     * @return string[]
     */
    public function getTags(): array;
}
