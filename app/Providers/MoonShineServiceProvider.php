<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\ColegioResource;
use App\MoonShine\Resources\ParaleloResource;
use App\MoonShine\Resources\PlayerResource;
use App\MoonShine\Resources\TeamResource;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Menu\MenuElement;
use MoonShine\Pages\Page;
use Closure;
use MoonShine\Pages\ViewPage;
use MoonShine\Menu\MenuDivider;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    /**
     * @return list<ResourceContract>
     */
    protected function resources(): array
    {
        return [
            new \App\MoonShine\Resources\ColegioResource(),
        ];
    }

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [];
    }

    /**
     * @return Closure|list<MenuElement>
     */
    protected function menu(): array
    {
        return [
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.admins_title'),
                    new MoonShineUserResource()
                ),
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.role_title'),
                    new MoonShineUserRoleResource()
                ),
            ]),

            MenuDivider::make(),

            MenuItem::make('Cursos/Paralelos', new TeamResource)->icon('heroicons.list-bullet'),
            MenuItem::make('Colegios', new ColegioResource)->icon('heroicons.list-bullet'),
            MenuGroup::make('Gestión Académica', [
                MenuItem::make('Colegios', new ColegioResource)
                    ->icon('heroicons.list-bullet'),

                MenuItem::make('Paralelos', new ParaleloResource)
                    ->icon('heroicons.outline.swatch'),
            ])->icon('heroicons.academic-cap'),

            MenuItem::make('Estudiantes', new PlayerResource)->icon('heroicons.user'),
            //(Amo esto<3) Una nueva Pestaña:
            //MenuItem::make('Title', ViewPage::make()->setTitle('hello')),

            MenuDivider::make(),
            MenuItem::make('INICIO', ViewPage::make(title: 'Inicio', alias: 'inicio')
                ->setContentView(contentView: 'home')
                ->setBreadcrumbs([
                    '#' => 'Inicio'
                ]))->icon('heroicons.home'),

            MenuDivider::make(),
            // Menú para cada categoría
            MenuGroup::make('Alfabeto Dactilológico', [
                MenuItem::make(
                    'Diversión en Pantalla',
                    ViewPage::make(title: 'Diversión en Pantalla', alias: 'alfabeto')
                        ->setContentView(contentView: 'Tema1.Alfabeto')  // Este es tu archivo
                        ->setBreadcrumbs([
                            '#' => 'Diversión en Pantalla'
                        ])
                )->icon('heroicons.outline.play'),
                MenuItem::make(
                    'Tarjetas Mágicas',
                    ViewPage::make(title: 'Tarjetas Mágicas', alias: 'tarjetas-alfabeto')
                        ->setContentView(contentView: 'Tema1.TarjetasAlfabeto')  // Este es tu archivo
                        ->setBreadcrumbs([
                            '#' => 'Tarjetas Mágicas'
                        ])
                )->icon('heroicons.outline.rectangle-stack'),
                MenuItem::make(
                    'El Cuentacuentos',
                    ViewPage::make(title: 'El Cuentacuentos', alias: 'cuentacuentos-alfabeto')
                        ->setContentView(contentView: 'Tema1.CuentosAlfabeto')  // Este es tu archivo
                        ->setBreadcrumbs([
                            '#' => 'El Cuentacuentos'
                        ])
                )->icon('heroicons.outline.book-open'),
                MenuItem::make(
                    'Explora y Aprende',
                    ViewPage::make(title: 'Explora y Aprende', alias: 'explora-alfabeto')
                        ->setContentView(contentView: 'Tema1.ExploraAlfabeto')  // Este es tu archivo
                        ->setBreadcrumbs([
                            '#' => 'Explora y Aprende'
                        ])
                )->icon('heroicons.outline.viewfinder-circle'),
                MenuItem::make(
                    'Juguemos',
                    ViewPage::make(title: 'Juguemos', alias: 'juguemos-alfabeto')
                        ->setContentView(contentView: 'Tema1.JuguemosAlfabeto')  // Este es tu archivo
                        ->setBreadcrumbs([
                            '#' => 'Juguemos'
                        ])
                )->icon('heroicons.outline.puzzle-piece'),
            ])->icon('heroicons.chat-bubble-left-right'),

            MenuGroup::make('Los Números', [
                MenuItem::make(
                    'Diversión en Pantalla',
                    ViewPage::make(title: 'Diversión en Pantalla', alias: 'numeros')
                        ->setContentView(contentView: 'Tema2.Numeros')  // Este es tu archivo para el Tema 2
                        ->setBreadcrumbs([
                            '#' => 'Diversión en Pantalla'
                        ])
                )->icon('heroicons.outline.play'),
                MenuItem::make(
                    'Tarjetas Mágicas',
                    ViewPage::make(title: 'Tarjetas Mágicas', alias: 'tarjetas-numeros')
                        ->setContentView(contentView: 'Tema2.TarjetasNumeros')  // Este es tu archivo para el Tema 2
                        ->setBreadcrumbs([
                            '#' => 'Tarjetas Mágicas'
                        ])
                )->icon('heroicons.outline.swatch'),
                MenuItem::make(
                    'El Cuentacuentos',
                    ViewPage::make(title: 'El Cuentacuentos', alias: 'cuentos-numeros')
                        ->setContentView(contentView: 'Tema2.CuentosNumeros')  // Este es tu archivo para el Tema 2
                        ->setBreadcrumbs([
                            '#' => 'El Cuentacuentos'
                        ])
                )->icon('heroicons.outline.book-open'),
                MenuItem::make(
                    'Explora y Aprende',
                    ViewPage::make(title: 'Explora y Aprende', alias: 'explora-numeros')
                        ->setContentView(contentView: 'Tema2.ExploraNumeros')  // Este es tu archivo para el Tema 2
                        ->setBreadcrumbs([
                            '#' => 'Explora y Aprende'
                        ])
                )->icon('heroicons.outline.viewfinder-circle'),
                MenuItem::make(
                    'Juguemos',
                    ViewPage::make(title: 'Juguemos', alias: 'juguemos-numeros')
                        ->setContentView(contentView: 'Tema2.JuguemosNumeros')  // Este es tu archivo para el Tema 2
                        ->setBreadcrumbs([
                            '#' => 'Juguemos'
                        ])
                )->icon('heroicons.outline.puzzle-piece'),
            ])->icon('heroicons.calculator'),

            MenuGroup::make('Los Colores', [
                MenuItem::make(
                    'Diversión en Pantalla',
                    ViewPage::make(title: 'Diversión en Pantalla', alias: 'colores')
                        ->setContentView(contentView: 'Tema3.Colores')  // Este es tu archivo para el Tema 3
                        ->setBreadcrumbs([
                            '#' => 'Diversión en Pantalla'
                        ])
                )->icon('heroicons.outline.play'),
                MenuItem::make(
                    'Tarjetas Mágicas',
                    ViewPage::make(title: 'Tarjetas Mágicas', alias: 'tarjetas-colores')
                        ->setContentView(contentView: 'Tema3.TarjetasColores')  // Este es tu archivo para el Tema 3
                        ->setBreadcrumbs([
                            '#' => 'Tarjetas Mágicas'
                        ])
                )->icon('heroicons.outline.rectangle-stack'),
                MenuItem::make(
                    'El Cuentacuentos',
                    ViewPage::make(title: 'El Cuentacuentos', alias: 'cuentos-colores')
                        ->setContentView(contentView: 'Tema3.CuentosColores')  // Este es tu archivo para el Tema 3
                        ->setBreadcrumbs([
                            '#' => 'El Cuentacuentos'
                        ])
                )->icon('heroicons.outline.book-open'),
                MenuItem::make(
                    'Explora y Aprende',
                    ViewPage::make(title: 'Explora y Aprende', alias: 'explora-colores')
                        ->setContentView(contentView: 'Tema3.ExploraColores')  // Este es tu archivo para el Tema 3
                        ->setBreadcrumbs([
                            '#' => 'Explora y Aprende'
                        ])
                )->icon('heroicons.outline.viewfinder-circle'),
                MenuItem::make(
                    'Juguemos',
                    ViewPage::make(title: 'Juguemos', alias: 'juguemos-colores')
                        ->setContentView(contentView: 'Tema3.JuguemosColores')  // Este es tu archivo para el Tema 3
                        ->setBreadcrumbs([
                            '#' => 'Juguemos'
                        ])
                )->icon('heroicons.outline.puzzle-piece'),
            ])->icon('heroicons.paint-brush'),

            MenuGroup::make('La Familia', [
                MenuItem::make(
                    'Diversión en Pantalla',
                    ViewPage::make(title: 'Diversión en Pantalla', alias: 'familia')
                        ->setContentView(contentView: 'Tema4.Familia')  // Este es tu archivo para el Tema de Miembros de la Familia
                        ->setBreadcrumbs([
                            '#' => 'Diversión en Pantalla'
                        ])
                )->icon('heroicons.outline.play'),
                MenuItem::make(
                    'Tarjetas Mágicas',
                    ViewPage::make(title: 'Tarjetas Mágicas', alias: 'tarjetas-familia')
                        ->setContentView(contentView: 'Tema4.TarjetasFamilia')  // Apunta al archivo "Tarjetas" en la carpeta "Familia"
                        ->setBreadcrumbs([
                            '#' => 'Tarjetas Mágicas'
                        ])
                )->icon('heroicons.outline.swatch'),
                MenuItem::make(
                    'El Cuentacuentos',
                    ViewPage::make(title: 'El Cuentacuentos', alias: 'cuentos-familia')
                        ->setContentView(contentView: 'Tema4.CuentosFamilia')  // Apunta al archivo "Cuentacuentos" en la carpeta "Familia"
                        ->setBreadcrumbs([
                            '#' => 'El Cuentacuentos'
                        ])
                )->icon('heroicons.outline.book-open'),
                MenuItem::make(
                    'Explora y Aprende',
                    ViewPage::make(title: 'Explora y Aprende', alias: 'explora-familia')
                        ->setContentView(contentView: 'Tema4.ExploraFamilia')  // Apunta al archivo "ExploraFamilia" en la carpeta "Familia"
                        ->setBreadcrumbs([
                            '#' => 'Explora y Aprende'
                        ])
                )->icon('heroicons.outline.viewfinder-circle'),
                MenuItem::make(
                    'Juguemos',
                    ViewPage::make(title: 'Juguemos', alias: 'juguemos-familia')
                        ->setContentView(contentView: 'Tema4.JuguemosFamilia')  // Apunta al archivo "JuguemosFamilia" en la carpeta "Familia"
                        ->setBreadcrumbs([
                            '#' => 'Juguemos'
                        ])
                )->icon('heroicons.outline.puzzle-piece'),
            ])->icon('heroicons.user-group'),

            MenuGroup::make('Los Verbos', [
                MenuItem::make(
                    'Diversión en Pantalla',
                    ViewPage::make(title: 'Diversión en Pantalla', alias: 'verbos-pronombres')
                        ->setContentView(contentView: 'Tema5.Verbos')  // Apunta al archivo "DiversionVerbos" en la carpeta "Tema5"
                        ->setBreadcrumbs([
                            '#' => 'Diversión en Pantalla'
                        ])
                )->icon('heroicons.outline.play'),
                MenuItem::make(
                    'Tarjetas Mágicas',
                    ViewPage::make(title: 'Tarjetas Mágicas', alias: 'tarjetas-verbos')
                        ->setContentView(contentView: 'Tema5.TarjetasVerbos')  // Apunta al archivo "TarjetasVerbos" en la carpeta "Tema5"
                        ->setBreadcrumbs([
                            '#' => 'Tarjetas Mágicas'
                        ])
                )->icon('heroicons.outline.rectangle-stack'),
                MenuItem::make(
                    'El Cuentacuentos',
                    ViewPage::make(title: 'El Cuentacuentos', alias: 'cuentos-verbos')
                        ->setContentView(contentView: 'Tema5.CuentosVerbos')  // Apunta al archivo "CuentacuentosVerbos" en la carpeta "Tema5"
                        ->setBreadcrumbs([
                            '#' => 'El Cuentacuentos'
                        ])
                )->icon('heroicons.outline.book-open'),
                MenuItem::make(
                    'Explora y Aprende',
                    ViewPage::make(title: 'Explora y Aprende', alias: 'explora-verbos')
                        ->setContentView(contentView: 'Tema5.ExploraVerbos')  // Apunta al archivo "ExploraAprendeVerbos" en la carpeta "Tema5"
                        ->setBreadcrumbs([
                            '#' => 'Explora y Aprende'
                        ])
                )->icon('heroicons.outline.viewfinder-circle'),
                MenuItem::make(
                    'Juguemos',
                    ViewPage::make(title: 'Juguemos', alias: 'juguemos-verbos')
                        ->setContentView(contentView: 'Tema5.JuguemosVerbos')  // Apunta al archivo "JuguemosVerbos" en la carpeta "Tema5"
                        ->setBreadcrumbs([
                            '#' => 'Juguemos'
                        ])
                )->icon('heroicons.outline.puzzle-piece'),
            ])->icon('heroicons.users'),

            MenuGroup::make('Alimentos y Bebidas', [
                MenuItem::make(
                    'Diversión en Pantalla',
                    ViewPage::make(title: 'Diversión en Pantalla', alias: 'alimentos')
                        ->setContentView(contentView: 'Tema6.Alimentos')  // Apunta al archivo "DiversionAlimentos" en la carpeta "Tema6"
                        ->setBreadcrumbs([
                            '#' => 'Diversión en Pantalla'
                        ])
                )->icon('heroicons.outline.play'),
                MenuItem::make(
                    'Tarjetas Mágicas',
                    ViewPage::make(title: 'Tarjetas Mágicas', alias: 'tarjetas-alimentos')
                        ->setContentView(contentView: 'Tema6.TarjetasAlimentos')  // Apunta al archivo "TarjetasAlimentos" en la carpeta "Tema6"
                        ->setBreadcrumbs([
                            '#' => 'Tarjetas Mágicas'
                        ])
                )->icon('heroicons.outline.swatch'),
                MenuItem::make(
                    'El Cuentacuentos',
                    ViewPage::make(title: 'El Cuentacuentos', alias: 'cuentos-alimentos')
                        ->setContentView(contentView: 'Tema6.CuentosAlimentos')  // Apunta al archivo "CuentacuentosAlimentos" en la carpeta "Tema6"
                        ->setBreadcrumbs([
                            '#' => 'El Cuentacuentos'
                        ])
                )->icon('heroicons.outline.book-open'),
                MenuItem::make(
                    'Explora y Aprende',
                    ViewPage::make(title: 'Explora y Aprende', alias: 'explora-alimentos')
                        ->setContentView(contentView: 'Tema6.ExploraAlimentos')  // Apunta al archivo "ExploraAlimentos" en la carpeta "Tema6"
                        ->setBreadcrumbs([
                            '#' => 'Explora y Aprende'
                        ])
                )->icon('heroicons.outline.viewfinder-circle'),
                MenuItem::make(
                    'Juguemos',
                    ViewPage::make(title: 'Juguemos', alias: 'juguemos-alimentos')
                        ->setContentView(contentView: 'Tema6.JuguemosAlimentos')  // Apunta al archivo "JuguemosAlimentos" en la carpeta "Tema6"
                        ->setBreadcrumbs([
                            '#' => 'Juguemos'
                        ])
                )->icon('heroicons.outline.puzzle-piece'),
            ])->icon('heroicons.cake'),

            MenuGroup::make('Días de la Semana', [
                MenuItem::make(
                    'Diversión en Pantalla',
                    ViewPage::make(title: 'Diversión en Pantalla', alias: 'dias')
                        ->setContentView(contentView: 'Tema7.Dias')  // Apunta al archivo "DiversionDias" en la carpeta "Tema7"
                        ->setBreadcrumbs([
                            '#' => 'Diversión en Pantalla'
                        ])
                )->icon('heroicons.outline.play'),
                MenuItem::make(
                    'Tarjetas Mágicas',
                    ViewPage::make(title: 'Tarjetas Mágicas', alias: 'tarjetas-dias')
                        ->setContentView(contentView: 'Tema7.TarjetasDias')  // Apunta al archivo "TarjetasDias" en la carpeta "Tema7"
                        ->setBreadcrumbs([
                            '#' => 'Tarjetas Mágicas'
                        ])
                )->icon('heroicons.outline.rectangle-stack'),
                MenuItem::make(
                    'El Cuentacuentos',
                    ViewPage::make(title: 'El Cuentacuentos', alias: 'cuentos-dias')
                        ->setContentView(contentView: 'Tema7.CuentosDias')  // Apunta al archivo "CuentacuentosDias" en la carpeta "Tema7"
                        ->setBreadcrumbs([
                            '#' => 'El Cuentacuentos'
                        ])
                )->icon('heroicons.outline.book-open'),
                MenuItem::make(
                    'Explora y Aprende',
                    ViewPage::make(title: 'Explora y Aprende', alias: 'explora-dias')
                        ->setContentView(contentView: 'Tema7.ExploraDias')  // Apunta al archivo "ExploraDias" en la carpeta "Tema7"
                        ->setBreadcrumbs([
                            '#' => 'Explora y Aprende'
                        ])
                )->icon('heroicons.outline.viewfinder-circle'),
                MenuItem::make(
                    'Juguemos',
                    ViewPage::make(title: 'Juguemos', alias: 'juguemos-dias')
                        ->setContentView(contentView: 'Tema7.JuguemosDias')  // Apunta al archivo "JuguemosDias" en la carpeta "Tema7"
                        ->setBreadcrumbs([
                            '#' => 'Juguemos'
                        ])
                )->icon('heroicons.outline.puzzle-piece'),
            ])->icon('heroicons.calendar-days'),

            MenuGroup::make('Trabajos y Oficios', [
                MenuItem::make(
                    'Diversión en Pantalla',
                    ViewPage::make(title: 'Diversión en Pantalla', alias: 'trabajos')
                        ->setContentView(contentView: 'Tema8.Trabajos')  // Apunta al archivo "DiversionTrabajos" en la carpeta "Tema8"
                        ->setBreadcrumbs([
                            '#' => 'Diversión en Pantalla'
                        ])
                )->icon('heroicons.outline.play'),
                MenuItem::make(
                    'Tarjetas Mágicas',
                    ViewPage::make(title: 'Tarjetas Mágicas', alias: 'tarjetas-trabajos')
                        ->setContentView(contentView: 'Tema8.TarjetasTrabajos')  // Apunta al archivo "TarjetasTrabajos" en la carpeta "Tema8"
                        ->setBreadcrumbs([
                            '#' => 'Tarjetas Mágicas'
                        ])
                )->icon('heroicons.outline.swatch'),
                MenuItem::make(
                    'El Cuentacuentos',
                    ViewPage::make(title: 'El Cuentacuentos', alias: 'cuentos-trabajos')
                        ->setContentView(contentView: 'Tema8.CuentosTrabajos')  // Apunta al archivo "CuentacuentosTrabajos" en la carpeta "Tema8"
                        ->setBreadcrumbs([
                            '#' => 'El Cuentacuentos'
                        ])
                )->icon('heroicons.outline.book-open'),
                MenuItem::make(
                    'Explora y Aprende',
                    ViewPage::make(title: 'Explora y Aprende', alias: 'explora-trabajos')
                        ->setContentView(contentView: 'Tema8.ExploraTrabajos')  // Apunta al archivo "ExploraAprendeTrabajos" en la carpeta "Tema8"
                        ->setBreadcrumbs([
                            '#' => 'Explora y Aprende'
                        ])
                )->icon('heroicons.outline.viewfinder-circle'),
                MenuItem::make(
                    'Juguemos',
                    ViewPage::make(title: 'Juguemos', alias: 'juguemos-trabajos')
                        ->setContentView(contentView: 'Tema8.JuguemosTrabajos')  // Apunta al archivo "JuguemosTrabajos" en la carpeta "Tema8"
                        ->setBreadcrumbs([
                            '#' => 'Juguemos'
                        ])
                )->icon('heroicons.outline.puzzle-piece'),
            ])->icon('heroicons.briefcase'),

            MenuDivider::make(),
            // MenuItem::make('¡Desafío del Aprendizaje!', new PlayerResource)->icon('heroicons.academic-cap'),

            MenuItem::make(
                '¡Desafío del Aprendizaje!',
                ViewPage::make(title: '¡Desafío del Aprendizaje!', alias: 'desafio-aprendizaje')
                    ->setContentView(contentView: 'Desafio_Aprendizaje.instrucciones') // Apunta al archivo "instrucciones" en la carpeta "Desafio_Aprendizaje"
                    ->setBreadcrumbs([
                        '#' => 'Desafío del Aprendizaje'
                    ])
            )->icon('heroicons.academic-cap'),
            /*
            MenuItem::make('¡Desafío del Aprendizaje!', ViewPage::make(title: 'Desafío del Aprendizaje', alias: 'desafio-aprendizaje')
    ->setContentView(contentView: 'Prueba.DesafioAprendizaje') // Puedes agregar el archivo de vista que corresponda
    ->setBreadcrumbs([
        '#' => '¡Desafío del Aprendizaje!'
    ])
)->icon('heroicons.academic-cap'),
            */
        ];
    }

    /**
     * @return Closure|array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [
            'colors' => [
                'primary' => '#FFA62F',
                'secondary' => 'rgb(236, 65, 118)',
                'body' => '#300135',
                'dark' => [
                    'DEFAULT' => 'rgb(30, 31, 67)',
                    50 => '#FFA62F',
                    100 => '#FFA62F',
                    200 => '#FFA62F',
                    300 => '#300135',
                    400 => 'rgb(48, 61, 93)',
                    500 => '#7E4351',
                    600 => '#773A59',
                    700 => '#591E4C',
                    800 => '#300135',
                    900 => 'rgb(15, 23, 42)',
                ],

                'success-bg' => 'rgb(0, 170, 0)',
                'success-text' => 'rgb(255, 255, 255)',
                'warning-bg' => 'rgb(255, 220, 42)',
                'warning-text' => 'rgb(139, 116, 0)',
                'error-bg' => 'rgb(224, 45, 45)',
                'error-text' => 'rgb(255, 255, 255)',
                'info-bg' => 'rgb(0, 121, 255)',
                'info-text' => 'rgb(255, 255, 255)',
            ],
            'darkColors' => [
                'body' => '#300135',
                'success-bg' => 'rgb(17, 157, 17)',
                'success-text' => 'rgb(178, 255, 178)',
                'warning-bg' => 'rgb(225, 169, 0)',
                'warning-text' => 'rgb(255, 255, 199)',
                'error-bg' => 'rgb(190, 10, 10)',
                'error-text' => 'rgb(255, 197, 197)',
                'info-bg' => 'rgb(38, 93, 205)',
                'info-text' => 'rgb(179, 220, 255)',
            ]
        ];
    }
}
