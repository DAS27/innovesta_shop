<?php

declare(strict_types=1);

namespace Innovesta\Bid\UseCases;


use Symfony\Component\HttpFoundation\File\File;

interface SaveRoomSchemeUseCase
{
    public function handle(File $file): string;
}
