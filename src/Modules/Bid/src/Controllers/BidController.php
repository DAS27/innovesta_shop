<?php

declare(strict_types=1);

namespace Innovesta\Bid\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Innovesta\Bid\Dto\BidDto;
use Innovesta\Bid\Requests\BidCreateRequests;
use Innovesta\Bid\Services\GetFilesByIdService;
use Innovesta\Bid\UseCases\CreateBidUseCase;
use Innovesta\Bid\UseCases\SaveRoomSchemeUseCase;
use Innovesta\Core\JobDispatcher\JobDispatcherInterface;
use Innovesta\Main\Controllers\AbstractController;
use Innovesta\Notification\Jobs\ProcessSendEmailJob;
use Symfony\Component\HttpFoundation\Response;

final class BidController extends AbstractController
{
    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view("bid");
    }

    public function store(
        BidCreateRequests $request,
        CreateBidUseCase $createBidUseCase,
        SaveRoomSchemeUseCase $saveRoomSchemeUseCase,
        GetFilesByIdService $getFilesByIdService,
        JobDispatcherInterface $jobDispatcher
    ): JsonResponse {
        $bidDto = BidDto::from($request->all());
        $bidEntity = $createBidUseCase->handle($bidDto);

        if ($request->hasFile('files')) {
            $saveRoomSchemeUseCase->handle($bidEntity->id, $request->file('files'));
        }

        $roomSchemePaths = $getFilesByIdService->handle($bidEntity->id);

        $jobDispatcher->dispatch(new ProcessSendEmailJob($bidEntity, $roomSchemePaths));

        return $this->sendResponse(
            [
                "message" => "Bid successfully created",
            ],
            Response::HTTP_CREATED
        );
    }
}
