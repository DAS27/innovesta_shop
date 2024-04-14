<?php

declare(strict_types=1);

namespace Innovesta\Bid\Repositories\Impl;

use Innovesta\Bid\Dto\BidDto;
use Innovesta\Bid\Entities\BidEntity;
use Innovesta\Bid\Enums\BidStatusEnum;
use Innovesta\Bid\Enums\RoomTypeEnum;
use Innovesta\Bid\Models\BidModel;
use Innovesta\Bid\Repositories\BidRepository;
use Ramsey\Uuid\Uuid;

final class BidRepositoryImpl implements BidRepository
{

    public function store(BidDto $bidDto): BidEntity
    {
        $bid = new BidModel();
        $bid->id = Uuid::uuid4()->toString();
        $bid->first_name = $bidDto->first_name;
        $bid->last_name = $bidDto->last_name;
        $bid->email = $bidDto->email;
        $bid->phone = $bidDto->phone;
        $bid->contact_method = $bidDto->contact_method;
        $bid->status = BidStatusEnum::tryFrom($bidDto->status->value);
        $bid->room_type = RoomTypeEnum::tryFrom($bidDto->room_type->value);
        $bid->room_dimensions = $bidDto->room_dimensions;
        $bid->comment = $bidDto->comment ? json_encode($bidDto->comment) : null;
        $bid->sku = $bidDto->sku;
        $bid->room_scheme = $bidDto->room_scheme;
        $bid->save();

        return $this->buildEntityFromModel($bid);
    }

    private function buildEntityFromModel(BidModel $bid): BidEntity
    {
        return BidEntity::from($bid->toArray());
    }
}
