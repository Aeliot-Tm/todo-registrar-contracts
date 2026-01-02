<?php

declare(strict_types=1);

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
