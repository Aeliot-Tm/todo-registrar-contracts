<?php

declare(strict_types=1);

namespace Aeliot\TodoRegistrarContracts;

interface InlineConfigFactoryInterface
{
    /**
     * Accepts data rendered by {@see InlineConfigReaderInterface }.
     *
     * @param array<array-key,mixed> $input
     */
    public function getInlineConfig(array $input): InlineConfigInterface;
}
