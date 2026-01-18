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
 * Represents a single element in the context hierarchy (file, namespace, class, method, etc.).
 */
interface ContextNodeInterface
{
    public const KIND_ARROW_FUNCTION = 'arrow_function';
    public const KIND_CLASS = 'class';
    public const KIND_CLASS_CONST = 'class_const';
    public const KIND_CLOSURE = 'closure';
    public const KIND_ENUM = 'enum';
    public const KIND_ENUM_CASE = 'enum_case';
    public const KIND_FILE = 'file';
    public const KIND_FUNCTION = 'function';
    public const KIND_INTERFACE = 'interface';
    public const KIND_MATCH = 'match';
    public const KIND_METHOD = 'method';
    public const KIND_NAMESPACE = 'namespace';
    public const KIND_PARAMETER = 'parameter';
    public const KIND_PROPERTY = 'property';
    public const KIND_TRAIT = 'trait';

    public function getKind(): string;

    public function getName(): ?string;
}
