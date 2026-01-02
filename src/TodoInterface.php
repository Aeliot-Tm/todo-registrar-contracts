<?php

declare(strict_types=1);

namespace Aeliot\TodoRegistrarContracts;

interface TodoInterface
{
    public function getAssignee(): ?string;

    public function getDescription(): string;

    public function getInlineConfig(): InlineConfigInterface;

    public function getSummary(): string;

    public function getTag(): string;
}
