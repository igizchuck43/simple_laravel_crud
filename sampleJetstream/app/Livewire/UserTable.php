<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\DateFilter;
use App\Models\User;

class UserTable extends DataTableComponent
{
    protected $model = User::class;


    public function filters(): array
    {
        return [
            DateFilter::make('Created at', 'created_at'),
        ];
    }
    public array $bulkActions = [
        'exportSelected' => 'Export',
    ];

    public function exportSelected()
    {
        dd($this->getSelected());
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setComponentWrapperAttributes([
            'id' => 'my-id',
            'class' => 'p-5',
        ]);
        $this->setTableWrapperAttributes([
            'id' => 'my-table-wrapper-id',
            'class' => 'm-4',
        ]);
        $this->setFilterLayout('slide-down');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->collapseOnMobile()
                ->sortable(),
            Column::make("Name", "name")
                ->setSortingPillTitle('Full Name')
                ->searchable()
                ->setSortingPillDirections('Asc', 'Desc')
                ->sortable(),
            Column::make("Email", "email")
                ->collapseOnMobile()
                ->sortable(),
            Column::make("Created at", "created_at")
                ->collapseOnMobile()
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->collapseAlways()
                ->sortable(),
            LinkColumn::make('Action')
                ->title(fn ($row) => 'Edit')
                ->location(fn ($row) => route('dashboard', $row)),
        ];
    }
}
