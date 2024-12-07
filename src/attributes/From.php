<?php

declare(strict_types=1);

#[Attribute]
class From
{
    public function __construct(
        private readonly string $name
    ) {}
}