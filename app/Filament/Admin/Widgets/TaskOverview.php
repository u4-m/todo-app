<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\Widget;

class TaskOverview extends Widget
{
    // ❌ OLD (static): protected static string $view = '...';
    // ✅ NEW (non-static):
    protected string $view = 'filament.admin.widgets.task-overview';
}

