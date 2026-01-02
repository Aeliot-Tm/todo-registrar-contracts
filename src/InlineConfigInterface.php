<?php

declare(strict_types=1);

namespace Aeliot\TodoRegistrarContracts;

/**
 * Inline config used for fine-tune of created issues.
 *
 * It has to be caught by {@see InlineConfigReaderInterface } from comment
 * and prepared by {@see InlineConfigFactoryInterface }.
 *
 * @template-extends \ArrayAccess<string,mixed>
 */
interface InlineConfigInterface extends \ArrayAccess
{
}
