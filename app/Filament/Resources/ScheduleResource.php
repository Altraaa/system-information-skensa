<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScheduleResource\Pages;
use App\Filament\Resources\ScheduleResource\RelationManagers;
use App\Models\Schedule;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ScheduleResource extends Resource
{
    protected static ?string $model = Schedule::class;
    protected static ?string $navigationGroup = 'School Management';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('classroom_id')
                ->relationship('classroom', 'name')
                ->required()
                ->label('Classroom'),
            Forms\Components\Select::make('subject_id')
                ->relationship('subject', 'name')
                ->required()
                ->label('Subject'),
            Forms\Components\Select::make('teacher_id')
                ->relationship('teacher', 'name')
                ->required()
                ->label('Teacher'),
            Forms\Components\Select::make('room_id')
                ->relationship('room', 'name')
                ->required()
                ->label('Room'),
            Forms\Components\TextInput::make('day')
                ->required()
                ->label('Day'),
            Forms\Components\TimePicker::make('time_start')
                ->required()
                ->label('Start Time'),
            Forms\Components\TimePicker::make('time_end')
                ->required()
                ->label('End Time'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('classroom.name')->label('Classroom'),
                Tables\Columns\TextColumn::make('subject.name')->label('Subject'),
                Tables\Columns\TextColumn::make('teacher.name')->label('Teacher'),
                Tables\Columns\TextColumn::make('day')->label('Day'),
                Tables\Columns\TextColumn::make('time_start')->label('Start Time'),
                Tables\Columns\TextColumn::make('time_end')->label('End Time'),
            ])
            ->filters([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSchedules::route('/'),
            'create' => Pages\CreateSchedule::route('/create'),
            'edit' => Pages\EditSchedule::route('/{record}/edit'),
        ];
    }
}