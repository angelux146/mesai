<x-filament-widgets::widget>
    <x-filament::section>
        <style>
            /* CSS exclusivo para el Hero Banner */
            @keyframes fade-in-up {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes float {
                0%, 100% {
                    transform: translateY(0px);
                }
                50% {
                    transform: translateY(-10px);
                }
            }

            @keyframes gradient-x {
                0%, 100% {
                    opacity: 0.3;
                }
                50% {
                    opacity: 0.8;
                }
            }

            @keyframes pulse-slow {
                0%, 100% {
                    opacity: 0.3;
                    transform: scale(1);
                }
                50% {
                    opacity: 0.6;
                    transform: scale(1.1);
                }
            }

            @keyframes ping-slow {
                75%, 100% {
                    transform: scale(2);
                    opacity: 0;
                }
            }

            .hero-banner {
                position: relative;
                overflow: hidden;
                border-radius: 36px;
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
                min-height: 480px;
                border: 1px solid rgba(255, 255, 255, 0.1);
                transition: all 0.3s ease;
            }

            .hero-banner:hover {
                transform: scale(1.02);
                box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.3);
            }

            .hero-bg-image {
                position: absolute;
                inset: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.7s ease;
            }

            .hero-banner:hover .hero-bg-image {
                transform: scale(1.05);
            }

            .hero-overlay {
                position: absolute;
                inset: 0;
                background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7));
            }

            .hero-gradient {
                position: absolute;
                inset: 0;
                background: linear-gradient(to right, transparent, rgba(220, 38, 38, 0.1), rgba(147, 51, 234, 0.2));
                animation: gradient-x 8s ease-in-out infinite;
            }

            .hero-glow-1 {
                position: absolute;
                top: -8rem;
                right: -8rem;
                width: 24rem;
                height: 24rem;
                border-radius: 9999px;
                background: linear-gradient(to right, rgba(220, 38, 38, 0.2), rgba(147, 51, 234, 0.2));
                filter: blur(3rem);
                animation: pulse-slow 6s ease-in-out infinite;
            }

            .hero-glow-2 {
                position: absolute;
                bottom: -8rem;
                left: -8rem;
                width: 24rem;
                height: 24rem;
                border-radius: 9999px;
                background: linear-gradient(to right, rgba(59, 130, 246, 0.2), rgba(6, 182, 212, 0.2));
                filter: blur(3rem);
                animation: pulse-slow 6s ease-in-out infinite 2s;
            }

            .hero-content {
                position: relative;
                z-index: 10;
                display: flex;
                height: 100%;
                align-items: center;
                padding: 3rem;
            }

            .logo-container {
                margin-bottom: 2rem;
                animation: float 3s ease-in-out infinite;
            }

            .logo-wrapper {
                position: relative;
                display: inline-flex;
                align-items: center;
                justify-content: center;
            }

            .logo-glow {
                position: absolute;
                inset: 0;
                background: linear-gradient(to right, #ef4444, #a855f7);
                border-radius: 1rem;
                filter: blur(1.25rem);
                opacity: 0.7;
            }

            .logo-box {
                position: relative;
                background: linear-gradient(to bottom right, #111827, #000000);
                border-radius: 1rem;
                padding: 1rem;
                border: 1px solid rgba(255, 255, 255, 0.2);
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            }

            .logo-inner {
                display: flex;
                align-items: center;
                gap: 0.75rem;
            }

            .logo-text {
                font-size: 2.5rem;
                font-weight: 900;
                background: linear-gradient(to right, #f87171, #ffffff);
                background-clip: text;
                -webkit-background-clip: text;
                color: transparent;
            }

            .hero-badge {
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
                margin-bottom: 1.5rem;
                border-radius: 9999px;
                border: 1px solid rgba(255, 255, 255, 0.2);
                background: rgba(255, 255, 255, 0.1);
                padding: 0.5rem 1.25rem;
                font-size: 0.875rem;
                color: white;
                backdrop-filter: blur(8px);
                animation: fade-in-up 0.6s ease-out forwards;
                opacity: 0;
            }

            .badge-pulse {
                position: relative;
                display: flex;
                height: 0.5rem;
                width: 0.5rem;
            }

            .badge-pulse-ring {
                position: absolute;
                display: inline-flex;
                height: 100%;
                width: 100%;
                border-radius: 9999px;
                background-color: #ef4444;
                opacity: 0.75;
                animation: ping-slow 1.5s cubic-bezier(0, 0, 0.2, 1) infinite;
            }

            .badge-dot {
                position: relative;
                display: inline-flex;
                border-radius: 9999px;
                height: 0.5rem;
                width: 0.5rem;
                background-color: #ef4444;
            }

            .hero-title {
                font-size: 4.5rem;
                font-weight: 900;
                letter-spacing: -0.025em;
                color: white;
                line-height: 1.2;
                animation: fade-in-up 0.6s ease-out forwards 0.1s;
                opacity: 0;
            }

            .hero-title-gradient {
                background: linear-gradient(to right, #f87171, #f472b6, #a855f7);
                background-clip: text;
                -webkit-background-clip: text;
                color: transparent;
            }

            .hero-description {
                margin-top: 1.5rem;
                font-size: 1.25rem;
                color: #e4e4e7;
                line-height: 1.625;
                animation: fade-in-up 0.6s ease-out forwards 0.2s;
                opacity: 0;
            }

            .hero-features {
                display: flex;
                flex-wrap: wrap;
                gap: 1rem;
                margin-top: 2.5rem;
                animation: fade-in-up 0.6s ease-out forwards 0.3s;
                opacity: 0;
            }

            .feature-item {
                border-radius: 1rem;
                border: 1px solid rgba(255, 255, 255, 0.1);
                background: rgba(255, 255, 255, 0.1);
                padding: 0.75rem 1.5rem;
                color: white;
                backdrop-filter: blur(8px);
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
                cursor: default;
            }

            .feature-item:hover {
                transform: scale(1.05);
                background: rgba(255, 255, 255, 0.2);
                border-color: rgba(239, 68, 68, 0.5);
            }

            .hero-corner-bl {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 8rem;
                height: 8rem;
                background: linear-gradient(to top right, rgba(239, 68, 68, 0.2), transparent);
                border-bottom-left-radius: 36px;
            }

            .hero-corner-tr {
                position: absolute;
                top: 0;
                right: 0;
                width: 8rem;
                height: 8rem;
                background: linear-gradient(to bottom left, rgba(168, 85, 247, 0.2), transparent);
                border-top-right-radius: 36px;
            }

            @media (max-width: 768px) {
                .hero-content {
                    padding: 1.5rem;
                }
                .hero-title {
                    font-size: 2.5rem;
                }
                .hero-description {
                    font-size: 1rem;
                }
                .logo-text {
                    font-size: 1.5rem;
                }
                .feature-item {
                    padding: 0.5rem 1rem;
                    font-size: 0.875rem;
                }
            }
        </style>

        <div class="hero-banner">
         
            {{-- Overlays --}}
            <div class="hero-overlay"></div>
            <div class="hero-gradient"></div>
            
            {{-- Glows --}}
            <div class="hero-glow-1"></div>
            <div class="hero-glow-2"></div>
            
            {{-- Content --}}
            <div class="hero-content">
                <div class="max-w-3xl">
                    
                    {{-- Logo M2 --}}
                    <div class="logo-container">
                        <div class="logo-wrapper">
                            <div class="logo-glow"></div>
                            <div class="logo-box">
                                <div class="logo-inner">
                                    <svg width="48px" height="48px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170 170" style="filter: drop-shadow(0 4px 6px rgba(0,0,0,0.3));">
                                        <defs>
                                            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                                                <stop offset="0%" style="stop-color:#FF6B6B;stop-opacity:1"/>
                                                <stop offset="50%" style="stop-color:#C41E3A;stop-opacity:1"/>
                                                <stop offset="100%" style="stop-color:#8B0000;stop-opacity:1"/>
                                            </linearGradient>
                                        </defs>
                                        <path d="m150.37 130.25c-2.45 5.66-5.35 10.87-8.71 15.66-4.58 6.53-8.33 11.05-11.22 13.56-4.48 4.12-9.28 6.23-14.42 6.35-3.69 0-8.14-1.05-13.32-3.18-5.197-2.12-9.973-3.17-14.34-3.17-4.58 0-9.492 1.05-14.746 3.17-5.262 2.13-9.501 3.24-12.742 3.35-4.929 0.21-9.842-1.96-14.746-6.52-3.13-2.73-7.045-7.41-11.735-14.04-5.032-7.08-9.169-15.29-12.41-24.65-3.471-10.11-5.211-19.9-5.211-29.378 0-10.857 2.346-20.221 7.045-28.068 3.693-6.303 8.606-11.275 14.755-14.925s12.793-5.51 19.948-5.629c3.915 0 9.049 1.211 15.429 3.591 6.362 2.388 10.447 3.599 12.238 3.599 1.339 0 5.877-1.416 13.57-4.239 7.275-2.618 13.415-3.702 18.445-3.275 13.63 1.1 23.87 6.473 30.68 16.153-12.19 7.386-18.22 17.731-18.1 31.002 0.11 10.337 3.86 18.939 11.23 25.769 3.34 3.17 7.07 5.62 11.22 7.36-0.9 2.61-1.85 5.11-2.86 7.51zm-31.26-123.01c0 8.1021-2.96 15.667-8.86 22.669-7.12 8.324-15.732 13.134-25.071 12.375-0.119-0.972-0.188-1.995-0.188-3.07 0-7.778 3.386-16.102 9.399-22.908 3.002-3.446 6.82-6.3113 11.45-8.597 4.62-2.2516 8.99-3.4968 13.1-3.71 0.12 1.0831 0.17 2.1663 0.17 3.2409z" fill="url(#grad1)"/>
                                    </svg>
                                    <span class="logo-text">M2</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Badge --}}
                    <div class="hero-badge">
                        <div class="badge-pulse">
                            <div class="badge-pulse-ring"></div>
                            <div class="badge-dot"></div>
                        </div>
                        🔥 Sistema Inteligente para Restaurantes
                    </div>

                    {{-- Title --}}
                    <h1 class="hero-title">
                        MesAI
                        <span class="hero-title-gradient">
                            Restaurant
                        </span>
                    </h1>

                    {{-- Description --}}
                    <p class="hero-description">
                        Administra reservaciones, clientes y menús desde una experiencia moderna, elegante y profesional.
                    </p>

                    {{-- Features --}}
                    <div class="hero-features">

    <a
        href="{{ route('filament.admin.resources.menus.index') }}"
        class="feature-item"
    >
        🍔 Menús Inteligentes
    </a>

    <a
        href="{{ route('filament.admin.resources.reservacions.index') }}"
        class="feature-item"
    >
        📅 Reservaciones
    </a>

    <a
        href="{{ route('filament.admin.resources.clientes.index') }}"
        class="feature-item"
    >
        👥 Clientes
    </a>

</div>

                </div>
            </div>
            
            {{-- Decorative corners --}}
            <div class="hero-corner-bl"></div>
            <div class="hero-corner-tr"></div>
            
        </div>
    </x-filament::section>
</x-filament-widgets::widget>