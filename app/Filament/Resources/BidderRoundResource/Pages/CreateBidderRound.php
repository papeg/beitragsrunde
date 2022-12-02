<?php

namespace App\Filament\Resources\BidderRoundResource\Pages;

use App\Filament\Resources\BidderRoundResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateBidderRound extends CreateRecord
{
    protected static string $resource = BidderRoundResource::class;
}
