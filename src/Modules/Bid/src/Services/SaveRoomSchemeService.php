<?php

declare(strict_types=1);

namespace Innovesta\Bid\Services;

use Symfony\Component\HttpFoundation\File\File;

interface SaveRoomSchemeService
{
    public function handle(File $file): string;
}
