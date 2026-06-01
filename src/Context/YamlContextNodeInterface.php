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

interface YamlContextNodeInterface extends ContextNodeInterface
{
    public const KIND_DOCUMENT = 'yaml_document';
    public const KIND_FILE = 'file';
    public const KIND_KEY = 'yaml_key';
    public const KIND_SEQUENCE_ITEM = 'yaml_sequence_item';
}
