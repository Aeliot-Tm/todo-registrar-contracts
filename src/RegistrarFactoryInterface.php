<?php

declare(strict_types=1);

namespace Aeliot\TodoRegistrarContracts;

use Aeliot\TodoRegistrarContracts\Exception\InvalidConfigException;
use Symfony\Component\Validator\Validator\ValidatorInterface;

interface RegistrarFactoryInterface
{
    /**
     * @param array<string,mixed> $config   Only array to not rise up set of interfaces. Transform it inside factory.
     * @param ValidatorInterface $validator Validator will be passed but I don't want enfoce using of it.
     *                                      Get it from function arguments.
     * <pre>
     *     $validator = func_get_arg(1);
     * </pre>
     *
     * @throws InvalidConfigException
     */
    public function create(array $config/*, ValidatorInterface $validator */): RegistrarInterface;
}
