<?php

declare(strict_types=1);

namespace Innovesta\Bid\Services\impl;

use Innovesta\Bid\Dto\BidFileDto;
use Innovesta\Bid\Entities\BidFileEntity;
use Innovesta\Bid\Repositories\BidFileRepository;
use Innovesta\Bid\Services\SaveRoomSchemeService;
use Ramsey\Uuid\Uuid;

final readonly class SaveRoomSchemeServiceImpl implements SaveRoomSchemeService
{
    public function __construct(
        private BidFileRepository $bidFileRepository
    ) {}

    public function handle(string $bidId, array $files): void
    {
        foreach ($files as $file) {
            $filename = Uuid::uuid4()->toString();
            $path = $file->storeAs('uploads', $filename, 'local');

            $this->bidFileRepository->store(new BidFileDto(
                name: $filename,
                bid_id: $bidId,
                path: $path,
                mime_type: $file->getClientMimeType(),
                size: $file->getSize()
            ));
        }
    }
}
