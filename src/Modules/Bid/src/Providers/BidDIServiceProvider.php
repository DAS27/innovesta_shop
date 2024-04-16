<?php

declare(strict_types=1);

namespace Innovesta\Bid\Providers;

use Illuminate\Support\ServiceProvider;
use Innovesta\Bid\Repositories\BidRepository;
use Innovesta\Bid\Repositories\Impl\BidRepositoryImpl;
use Innovesta\Bid\Services\CreateBidService;
use Innovesta\Bid\Services\impl\CreateBidServiceImpl;
use Innovesta\Bid\Services\impl\SaveRoomSchemeServiceImpl;
use Innovesta\Bid\Services\SaveRoomSchemeService;
use Innovesta\Bid\UseCases\CreateBidUseCase;
use Innovesta\Bid\UseCases\Impl\CreateBidUseCaseImpl;
use Innovesta\Bid\UseCases\Impl\SaveRoomSchemeUseCaseImpl;
use Innovesta\Bid\UseCases\SaveRoomSchemeUseCase;

final class BidDIServiceProvider extends ServiceProvider
{
    public array $bindings = [
        //Repositories
        BidRepository::class => BidRepositoryImpl::class,

        //Services
        CreateBidService::class => CreateBidServiceImpl::class,
        SaveRoomSchemeService::class => SaveRoomSchemeServiceImpl::class,

        //Use Cases
        CreateBidUseCase::class => CreateBidUseCaseImpl::class,
        SaveRoomSchemeUseCase::class => SaveRoomSchemeUseCaseImpl::class,
    ];
}
