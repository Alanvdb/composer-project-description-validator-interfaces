<?php declare(strict_types=1);

namespace AlanVdb\Composer\Definition;

use AlanVdb\Validator\Definition\ValidatorInterface;

interface ComposerProjectDescriptionValidatorFactoryInterface
{
    public function create() : ValidatorInterface;
}
