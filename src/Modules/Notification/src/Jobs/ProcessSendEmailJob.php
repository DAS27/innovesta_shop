<?php

declare(strict_types=1);

namespace Innovesta\Notification\Jobs;

use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Innovesta\Bid\Entities\BidEntity;
use Innovesta\Core\JobDispatcher\BaseJob;
use Innovesta\Notification\UseCases\SendEmailBidUseCase;
use Psr\Log\LoggerInterface;
use Throwable;

final class ProcessSendEmailJob extends BaseJob implements ShouldQueue
{
    public $tries = 3;

    public function __construct(
        private readonly BidEntity $bidEntity,
        private readonly array $roomSchemePaths
    ) {
        $this->queue = config("notification.base.queue_name");
    }

    public function handle(
        SendEmailBidUseCase $sendEmailBidUseCase,
        LoggerInterface $logger
    ): void {
        try {
            $sendEmailBidUseCase->handle($this->bidEntity, $this->roomSchemePaths);
        } catch (Throwable $th) {
            $logger->critical(config("errors.send.email"), [
                "name" => $this->bidEntity->first_name,
                "phone" => $this->bidEntity->phone,
                "created_at" => Carbon::parse(
                    $this->bidEntity->created_at
                )->timezone("Asia/Almaty"),
                "message" => $th->getMessage(),
            ]);

            throw $th;
        }
    }
}
