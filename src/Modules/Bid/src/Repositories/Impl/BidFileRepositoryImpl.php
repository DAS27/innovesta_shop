<?php

declare(strict_types=1);

namespace Innovesta\Bid\Repositories\Impl;

use Innovesta\Bid\Dto\BidFileDto;
use Innovesta\Bid\Entities\BidFileEntity;
use Innovesta\Bid\Models\BidFileModel;
use Innovesta\Bid\Repositories\BidFileRepository;
use Ramsey\Uuid\Uuid;

final class BidFileRepositoryImpl implements BidFileRepository
{
    public function store(BidFileDto $bidFileDto): BidFileEntity
    {
        $bidFile = new BidFileModel();
        $bidFile->id = Uuid::uuid4()->toString();
        $bidFile->bid_id = $bidFileDto->bid_id;
        $bidFile->name = $bidFileDto->name;
        $bidFile->path = $bidFileDto->path;
        $bidFile->mime_type = $bidFileDto->mime_type;
        $bidFile->size = $bidFileDto->size;
        $bidFile->save();

        return $this->buildEntityFromModel($bidFile);
    }

    private function buildEntityFromModel(BidFileModel $bidFileModel): BidFileEntity
    {
        return BidFileEntity::from($bidFileModel->toArray());
    }

    public function getByBidId(string $bidId): ?array
    {
        /** @var BidFileModel $bidFile */
        $bidFiles = BidFileModel::where('bid_id', $bidId)->get();

        if ($bidFiles === null) {
            return null;
        }

        return array_map(fn($bidFiles) => BidFileEntity::from($bidFiles), $bidFiles->toArray());
    }
}
