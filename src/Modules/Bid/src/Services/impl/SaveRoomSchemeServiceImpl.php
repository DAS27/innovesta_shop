<?php

declare(strict_types=1);

namespace Innovesta\Bid\Services\impl;

use Symfony\Component\HttpFoundation\File\File;
use Innovesta\Bid\Services\SaveRoomSchemeService;
final class SaveRoomSchemeServiceImpl implements SaveRoomSchemeService
{
    public function handle(File $file): string
    {
        $filename = time() . '_' . $file->getClientOriginalName();

        return $file->storeAs('uploads', $filename, 'local');
    }
}
