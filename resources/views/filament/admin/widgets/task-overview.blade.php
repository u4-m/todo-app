<x-filament-widgets::widget>
    <x-filament::section>
        <h2 class="text-xl font-bold mb-4">📊 Task Overview</h2>
        <ul class="space-y-2">
            <li><strong>Total Tasks:</strong> {{ \App\Models\Task::count() }}</li>
            <li><strong>Pending:</strong> {{ \App\Models\Task::where('status', 'pending')->count() }}</li>
            <li><strong>In Progress:</strong> {{ \App\Models\Task::where('status', 'in progress')->count() }}</li>
            <li><strong>Completed:</strong> {{ \App\Models\Task::where('status', 'completed')->count() }}</li>
        </ul>
    </x-filament::section>
</x-filament-widgets::widget>

