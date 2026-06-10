@extends('layouts.layout')

@section('title', 'Sobre Nosotros')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
    <div class="about-page-wrapper">
        <section class="about-content">
            <header class="about-header">
                <h2 class="about-h2">Sobre Nosotros</h2>
            </header>

            <div class="mac-grid">
                <article class="mac-window">
                    <div class="mac-chrome">
                        <div class="mac-dots">
                            <span class="dot dot-red"></span>
                            <span class="dot dot-yellow"></span>
                            <span class="dot dot-green"></span>
                        </div>
                        <div class="mac-title">Nuestra Misión</div>
                    </div>
                    <div class="mac-body">
                        <p>Somos un servicio técnico especializado en la reparación de celulares. Nuestro objetivo es brindar un servicio rápido, confiable y de calidad para que tus dispositivos vuelvan a funcionar como nuevos.</p>
                    </div>
                </article>

                <article class="mac-window">
                    <div class="mac-chrome">
                        <div class="mac-dots">
                            <span class="dot dot-red"></span>
                            <span class="dot dot-yellow"></span>
                            <span class="dot dot-green"></span>
                        </div>
                        <div class="mac-title">Equipo Experto</div>
                    </div>
                    <div class="mac-body">
                        <p>Contamos con un equipo de técnicos altamente capacitados y con experiencia en la reparación de una amplia variedad de marcas y modelos de celulares. Utilizamos repuestos originales y garantizamos todas nuestras reparaciones.</p>
                    </div>
                </article>

                <article class="mac-window">
                    <div class="mac-chrome">
                        <div class="mac-dots">
                            <span class="dot dot-red"></span>
                            <span class="dot dot-yellow"></span>
                            <span class="dot dot-green"></span>
                        </div>
                        <div class="mac-title">Sistema de Gestión</div>
                    </div>
                    <div class="mac-body">
                        <p>En nuestro sistema de gestión, podrás llevar un control detallado de las reparaciones, clientes, marcas y modelos que manejamos. Además, ofrecemos un seguimiento personalizado para cada reparación, asegurando la satisfacción de nuestros clientes.</p>
                    </div>
                </article>

                <article class="mac-window">
                    <div class="mac-chrome">
                        <div class="mac-dots">
                            <span class="dot dot-red"></span>
                            <span class="dot dot-yellow"></span>
                            <span class="dot dot-green"></span>
                        </div>
                        <div class="mac-title">Garantía de Calidad</div>
                    </div>
                    <div class="mac-body">
                        <p>¡Gracias por confiar en nosotros para el cuidado de tus dispositivos!</p>
                    </div>
                </article>
            </div>
        </section>
    </div>
@endsection