<x-filament-widgets::widget>
    <x-filament::section>

    <style>

        .stats-grid{
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:1.5rem;
            width:100%;
        }

        .card{
            border-radius:22px;
            background-image: linear-gradient(
                163deg,
                #ff3b3b 0%,
                #ff7b00 50%,
                #ff0000 100%
            );

            transition:all .3s ease;
            padding:2px;
        }

        .card2{
            background:#111111;
            border-radius:20px;
            transition:all .2s ease;
            height:100%;
        }

        .card2:hover{
            transform:scale(0.98);
        }

        .card:hover{
            box-shadow:
                0px 0px 30px 1px rgba(255, 59, 59, 0.35);
        }

        .stat-content{
            padding:1.8rem;
            color:white;
        }

        .stat-top{
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:1rem;
        }

        .stat-title{
            font-size:.95rem;
            color:#a1a1aa;
            margin-bottom:.5rem;
            font-weight:500;
        }

        .stat-value{
            font-size:2.4rem;
            font-weight:800;
            line-height:1;
        }

        .stat-description{
            margin-top:1rem;
            font-size:.9rem;
            color:#d4d4d8;
        }

        .stat-emoji{
            font-size:2.5rem;
            opacity:.9;
        }

        @media(max-width:1024px){

            .stats-grid{
                grid-template-columns:repeat(2,1fr);
            }

        }

        @media(max-width:640px){

            .stats-grid{
                grid-template-columns:1fr;
            }

        }

    </style>

    <div class="stats-grid">

@foreach($this->getData()['stats'] as $stat)

            <div class="card">

                <div class="card2">

                    <div class="stat-content">

                        <div class="stat-top">

                            <div>

                                <div class="stat-title">
                                    {{ $stat['title'] }}
                                </div>

                                <div class="stat-value">
                                    {{ $stat['value'] }}
                                </div>

                            </div>

                            <div class="stat-emoji">

                                @if(str_contains($stat['title'], '🍔'))
                                    🍔
                                @elseif(str_contains($stat['title'], '👥'))
                                    👥
                                @elseif(str_contains($stat['title'], '📅'))
                                    📅
                                @else
                                    🔥
                                @endif

                            </div>

                        </div>

                        <div class="stat-description">
                            {{ $stat['description'] }}
                        </div>

                    </div>

                </div>

            </div>

        @endforeach

    </div>
    </x-filament::section>
</x-filament-widgets::widget>