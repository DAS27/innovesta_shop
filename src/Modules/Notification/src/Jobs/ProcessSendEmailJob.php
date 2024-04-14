<?php

declare(strict_types=1);

namespace Innovesta\Notification\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Innovesta\Bid\Dto\BidDto;
use Innovesta\Core\JobDispatcher\BaseJob;
use Innovesta\Notification\UseCases\SendEmailBidUseCase;
use Psr\Log\LoggerInterface;
use Throwable;

final class ProcessSendEmailJob extends BaseJob implements ShouldQueue
{
    public $tries = 3;

    public function __construct(
        private readonly BidDto $bidDto
    ) {
        $this->queue = config('notification.base.queue_name');
    }

    public function handle(
        SendEmailBidUseCase $sendEmailBidUseCase,
        LoggerInterface $logger
    ): void {
        try {
            $sendEmailBidUseCase->handle($this->bidDto);
        } catch (Throwable $th) {
            $logger->critical(config('errors.send.email'), [
                'name' => $this->bidDto->first_name,
                'phone' => $this->bidDto->phone,
                'message' => $th->getMessage(),
            ]);

            throw $th;
        }
    }
}
