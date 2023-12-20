<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Artical;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\ModelResource;

class ArticalResource extends ModelResource
{
    protected string $model = Artical::class;

    protected string $title = 'Статьи';


    public function fields(): array
    {
        return [
            Block::make('Основная информация',
                [
                    ID::make()->sortable(),
                    Text::make('Заголовок', 'title')->sortable(),
                    Textarea::make('Содержание', 'content'),
                ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
