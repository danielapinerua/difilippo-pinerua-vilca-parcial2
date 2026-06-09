@extends('layouts.layout')
@section('title', 'Inicio')

@push('styles') 
<link rel="stylesheet" href="{{ asset('css/home.css') }}"> 
<link rel="stylesheet" href="{{ asset('css/reparacion/index_reparaciones.css') }}"> 
<link rel="stylesheet" href="{{ asset('css/clientes/clientes_index.css') }}"> 
@endpush

@section('content')

<div class="home-container-wrapper">
    <div class="home-container">
        <h2>Sistema de Gestión de Reparaciones</h2>

        <p>Aplicación para administrar reparaciones de celulares en un servicio técnico.</p>

        @auth
            <p class="auth-msg">Bienvenido al sistema</p>
            <a href="{{ route('reparaciones.index') }}">Ir al listado de reparaciones</a>
        @else
            <p class="auth-msg">Para acceder al sistema, iniciá sesión.</p>
            <a href="{{ route('login') }}">Iniciar sesión</a>
        @endauth

        <div class="scroll-indicator">
            <span>Ver más</span>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <polyline points="19 12 12 19 5 12"></polyline>
            </svg>
        </div>
    </div>
</div>

<!-- Mockup Reparaciones -->
<section class="home-index">
    <div class="dashboard-showcase">
        
        <div class="showcase-intro">
            <h2>Controla todo desde un solo lugar</h2>
            <p>Conocé al instante cuántas reparaciones realizaste hoy, qué celulares están en proceso, cuáles están listos para entregar y el estado general de tu servicio técnico.</p>
        </div>

        <div class="showcase-window-wrapper" style="position: relative;">
            <div class="showcase-pill showcase-pill-1">
                <span class="spill-dot spill-dot-live"></span>
                En vivo
            </div>
            <div class="showcase-pill showcase-pill-2">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                3 marcas activas
            </div>
            <div class="showcase-pill showcase-pill-3">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                2 técnicos activos
            </div>
            
            <!-- Mac Window -->
            <div class="showcase-window">
                <div class="showcase-chrome">
                    <div class="chrome-dots">
                        <span class="dot dot-red"></span>
                        <span class="dot dot-yellow"></span>
                        <span class="dot dot-green"></span>
                    </div>
                    <div class="chrome-url">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        app.davinci.com/reparaciones
                    </div>
                </div>
                
                <div class="showcase-real-body">
    
                    <div class="reparaciones-index">
                        <h2>Listado de Reparaciones</h2>
                        <p class="bienvenida">Bienvenido, Usuario Demo</p>
    
                        <a href="javascript:void(0)" class="btn-nueva">+ Nueva reparación</a>
                        
                        <div class="table-wrapper">
                            <table>
                                <tr>
                                    <th>Cliente</th>
                                    <th>Celular</th>
                                    <th>Marca</th>
                                    <th>Estado</th>
                                    <th>Técnico</th>
                                    <th>Acciones</th>
                                </tr>
                                <tr>
                                    <td>Juan Pérez</td>
                                    <td>Galaxy S21</td>
                                    <td>Samsung</td>
                                    <td>
                                        <span class="estado estado-ingresado">
                                            Ingresado
                                        </span>
                                    </td>
                                    <td>Carlos</td>
                                    <td>
                                        <div class="acciones">
                                            <a href="javascript:void(0)">Ver</a>
                                            <a href="javascript:void(0)">Editar</a>
                                            <form><button type="button">Eliminar</button></form>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>María Gómez</td>
                                    <td>iPhone 13</td>
                                    <td>Apple</td>
                                    <td>
                                        <span class="estado estado-reparando">
                                            Reparando
                                        </span>
                                    </td>
                                    <td>Ana</td>
                                    <td>
                                        <div class="acciones">
                                            <a href="javascript:void(0)">Ver</a>
                                            <a href="javascript:void(0)">Editar</a>
                                            <form><button type="button">Eliminar</button></form>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Luis Martínez</td>
                                    <td>Moto G50</td>
                                    <td>Motorola</td>
                                    <td>
                                        <span class="estado estado-reparado">
                                            Reparado
                                        </span>
                                    </td>
                                    <td>Carlos</td>
                                    <td>
                                        <div class="acciones">
                                            <a href="javascript:void(0)">Ver</a>
                                            <a href="javascript:void(0)">Editar</a>
                                            <form><button type="button">Eliminar</button></form>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Julian Alvarez</td>
                                    <td>iPhone 15 pro Max</td>
                                    <td>Apple</td>
                                    <td>
                                        <span class="estado estado-reparado">
                                            Reparado
                                        </span>
                                    </td>
                                    <td>Carlos</td>
                                    <td>
                                        <div class="acciones">
                                            <a href="javascript:void(0)">Ver</a>
                                            <a href="javascript:void(0)">Editar</a>
                                            <form><button type="button">Eliminar</button></form>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Mockup Clientes -->
    <div class="dashboard-showcase" style="margin-top: 4rem;">
        
        <div class="showcase-intro">
            <h2>Gestión de Clientes</h2>
            <p>Mantén un registro organizado de todas las personas que confían en tu servicio. Encuentra rápidamente sus datos de contacto y su historial de reparaciones.</p>
        </div>

        <div class="showcase-window-wrapper" style="position: relative;">
            <div class="showcase-pill showcase-pill-1">
                <span class="spill-dot spill-dot-live"></span>
                En Vivo
            </div>
            <div class="showcase-pill showcase-pill-2">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                +50 Clientes
            </div>
            <div class="showcase-pill showcase-pill-3">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                10 nuevos
            </div>
            
            <!-- Mac Window -->
            <div class="showcase-window">
                <div class="showcase-chrome">
                    <div class="chrome-dots">
                        <span class="dot dot-red"></span>
                        <span class="dot dot-yellow"></span>
                        <span class="dot dot-green"></span>
                    </div>
                    <div class="chrome-url">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        app.davinci.com/clientes
                    </div>
                </div>
                
                <div class="showcase-real-body">
    
                    <div class="clientes-index">
                        <h2>Listado de Clientes</h2>
                        <a href="javascript:void(0)" class="btn-nueva">+ Nuevo Cliente</a>
                        <ul>
                            <li>
                                <div class="cliente-info">
                                    <span>Juan Pérez</span>
                                    <small>Tel: 11-1234-5678</small>
                                </div>
                                <div class="acciones">
                                    <a href="javascript:void(0)">Ver</a>
                                    <a href="javascript:void(0)">Editar</a>
                                    <form><button type="button">Eliminar</button></form>
                                </div>
                            </li>
                            <li>
                                <div class="cliente-info">
                                    <span>María Gómez</span>
                                    <small>Tel: 11-9876-5432</small>
                                </div>
                                <div class="acciones">
                                    <a href="javascript:void(0)">Ver</a>
                                    <a href="javascript:void(0)">Editar</a>
                                    <form><button type="button">Eliminar</button></form>
                                </div>
                            </li>
                            <li>
                                <div class="cliente-info">
                                    <span>Luis Martínez</span>
                                    <small>Tel: 11-5555-4444</small>
                                </div>
                                <div class="acciones">
                                    <a href="javascript:void(0)">Ver</a>
                                    <a href="javascript:void(0)">Editar</a>
                                    <form><button type="button">Eliminar</button></form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection