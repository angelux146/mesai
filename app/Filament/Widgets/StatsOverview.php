<?php

namespace App\Filament\Widgets;

use App\Models\Menu;
use App\Models\Cliente;
use App\Models\Reservacion;
use Filament\Widgets\Widget;

class StatsOverview extends Widget
{
  protected string $view = 'filament.widgets.stats-overview';

  protected int|string|array $columnSpan = 'full';

  public function getData(): array
  {
    return [

      'stats' => [

        [
          'title' => '🍔 Platillos',
          'value' => Menu::count(),
          'description' => 'Platillos registrados',
        ],

        [
          'title' => '👥 Clientes',
          'value' => Cliente::count(),
          'description' => 'Clientes registrados',
        ],

        [
          'title' => '📅 Reservaciones',
          'value' => Reservacion::count(),
          'description' => 'Reservaciones totales',
        ],

        [
          'title' => '🔥 Hoy',
          'value' => Reservacion::whereDate('created_at', today())->count(),
          'description' => 'Reservaciones creadas hoy',
        ],

      ]

    ];
  }
}
