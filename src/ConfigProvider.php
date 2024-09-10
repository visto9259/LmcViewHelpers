<?php

declare(strict_types=1);

namespace Lmc\View\Helper;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [],
        ];
    }
}
