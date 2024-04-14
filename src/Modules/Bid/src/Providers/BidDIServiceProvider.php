<?php

declare(strict_types=1);

namespace Innovesta\Bid\Providers;

use Illuminate\Support\ServiceProvider;
use Innovesta\Bid\Repositories\BidRepository;
use Innovesta\Bid\Repositories\Impl\BidRepositoryImpl;
use Innovesta\Bid\Services\CreateBidService;
use Innovesta\Bid\Services\impl\CreateBidServiceImpl;
use Innovesta\Bid\UseCases\CreateBidUseCase;
use Innovesta\Bid\UseCases\Impl\CreateBidUseCaseImpl;

final class BidDIServiceProvider extends ServiceProvider
{
    public array $bindings = [
        //Repositories
        BidRepository::class => BidRepositoryImpl::class,

        //Services
        CreateBidService::class => CreateBidServiceImpl::class,

        //Use Cases
        CreateBidUseCase::class => CreateBidUseCaseImpl::class,
    ];
}
