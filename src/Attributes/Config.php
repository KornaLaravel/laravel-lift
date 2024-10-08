<?php

declare(strict_types=1);

namespace WendellAdriel\Lift\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
final class Config
{
    public function __construct(
        public ?string $cast = null,
        public bool $fillable = false,
        public bool $hidden = false,
        public bool $immutable = false,
        public ?string $column = null,
        public mixed $default = null,
        public ?string $watch = null,
        /**
         * @var array<string>
         */
        public array $rules = [],
        /**
         * @var array<string, string>
         */
        public array $messages = [],
    ) {}
}
