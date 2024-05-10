<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class Calendar extends Widget
{
    protected static string $view = 'filament.widgets.calendar';

    protected int | string | array $columnSpan = 'full';
}
