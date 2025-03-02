<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Colegio;
use App\Models\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Text;


class ColegioResource extends ModelResource
{
    protected string $model = Colegio::class;

    protected string $title = 'Colegio/Colegio';

    protected bool $createInModal = true;
    protected bool $editInModal = true;
    protected bool $detailModal = false;

    protected bool $withPolicy = false;

    public function redirectAfterSave(): string
    {
        $referer = Request::header('referer');
        return $referer ?: '/';
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        //FUNCION PARA INSERTAR CON MODAL
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Nombre', 'nombre'),
                Text::make('Dirección', 'direccion'),
                Text::make('Telefono', 'telefono'),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
