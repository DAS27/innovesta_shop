<?php

declare(strict_types=1);

namespace Innovesta\Bid\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Innovesta\Bid\Dto\BidDto;
use Innovesta\Bid\Requests\BidCreateRequests;
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
        JobDispatcherInterface $jobDispatcher
    ): JsonResponse {
        if ($request->hasFile('room_scheme')) {
            $path = $saveRoomSchemeUseCase->handle($request->file('room_scheme'));

            $request->merge(['room_scheme' => $path]);
        }

        $bidDto = BidDto::from($request->all());
        $bidEntity = $createBidUseCase->handle($bidDto);

        $jobDispatcher->dispatch(new ProcessSendEmailJob($bidEntity));

        return $this->sendResponse(
            [
                "message" => "Bid successfully created",
            ],
            Response::HTTP_CREATED
        );
    }
}
