<?php

declare(strict_types=1);

namespace Innovesta\Bid\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Innovesta\Main\Models\AbstractModel;

/**
 * @property string $bid_id
 * @property string $name
 * @property string $path
 * @property string $mime_type
 * @property int $size
 */
final class BidFileModel extends AbstractModel
{
    protected $table = 'bid_files';

    protected $fillable = [
        'bid_id',
        'name',
        'path',
        'mime_type',
        'size',
    ];

    public function bid(): BelongsTo
    {
        return $this->belongsTo(BidModel::class, 'bid_id', 'id');
    }
}
