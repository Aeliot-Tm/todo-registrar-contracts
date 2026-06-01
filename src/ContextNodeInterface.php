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

use Aeliot\TodoRegistrarContracts\Context\ContextNodeInterface as NewContextNodeInterface;
use Aeliot\TodoRegistrarContracts\Context\PhpContextNodeInterface;

/**
 * @deprecated use {@see NewContextNodeInterface }
 */
interface ContextNodeInterface extends NewContextNodeInterface
{
    /** @deprecated going to remove. Use {@see PhpContextNodeInterface::KIND_ARROW_FUNCTION } */
    public const KIND_ARROW_FUNCTION = PhpContextNodeInterface::KIND_ARROW_FUNCTION;

    /** @deprecated going to remove. Use {@see PhpContextNodeInterface::KIND_CLASS } */
    public const KIND_CLASS = PhpContextNodeInterface::KIND_CLASS;

    /** @deprecated going to remove. Use {@see PhpContextNodeInterface::KIND_CLASS_CONST } */
    public const KIND_CLASS_CONST = PhpContextNodeInterface::KIND_CLASS_CONST;

    /** @deprecated going to remove. Use {@see PhpContextNodeInterface::KIND_CLOSURE } */
    public const KIND_CLOSURE = PhpContextNodeInterface::KIND_CLOSURE;

    /** @deprecated going to remove. Use {@see PhpContextNodeInterface::KIND_ENUM } */
    public const KIND_ENUM = PhpContextNodeInterface::KIND_ENUM;

    /** @deprecated going to remove. Use {@see PhpContextNodeInterface::KIND_ENUM_CASE } */
    public const KIND_ENUM_CASE = PhpContextNodeInterface::KIND_ENUM_CASE;

    /** @deprecated going to remove. Use {@see PhpContextNodeInterface::KIND_FILE } */
    public const KIND_FILE = PhpContextNodeInterface::KIND_FILE;

    /** @deprecated going to remove. Use {@see PhpContextNodeInterface::KIND_FUNCTION } */
    public const KIND_FUNCTION = PhpContextNodeInterface::KIND_FUNCTION;

    /** @deprecated going to remove. Use {@see PhpContextNodeInterface::KIND_INTERFACE } */
    public const KIND_INTERFACE = PhpContextNodeInterface::KIND_INTERFACE;

    /** @deprecated going to remove. Use {@see PhpContextNodeInterface::KIND_MATCH } */
    public const KIND_MATCH = PhpContextNodeInterface::KIND_MATCH;

    /** @deprecated going to remove. Use {@see PhpContextNodeInterface::KIND_METHOD } */
    public const KIND_METHOD = PhpContextNodeInterface::KIND_METHOD;

    /** @deprecated going to remove. Use {@see PhpContextNodeInterface::KIND_NAMESPACE } */
    public const KIND_NAMESPACE = PhpContextNodeInterface::KIND_NAMESPACE;

    /** @deprecated going to remove. Use {@see PhpContextNodeInterface::KIND_PARAMETER } */
    public const KIND_PARAMETER = PhpContextNodeInterface::KIND_PARAMETER;

    /** @deprecated going to remove. Use {@see PhpContextNodeInterface::KIND_PROPERTY } */
    public const KIND_PROPERTY = PhpContextNodeInterface::KIND_PROPERTY;

    /** @deprecated going to remove. Use {@see PhpContextNodeInterface::KIND_TRAIT } */
    public const KIND_TRAIT = PhpContextNodeInterface::KIND_TRAIT;
}
