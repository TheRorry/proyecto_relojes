@extends('plantilla')

@section('contenido')
<div class="py-5">
    <div class="text-center mb-5">
        <h1 class="hansip-font" style="font-size: clamp(2.5rem, 6vw, 4rem);">
            IMPERIAL <span class="text-magenta">COLLECTION</span>
        </h1>
        <p class="text-secondary hansip-font" style="letter-spacing: 3px; font-size: 0.8rem;">
            ALTA RELOJERÍA // EDICIONES LIMITADAS
        </p>
    </div>

    <div class="row g-4">
        <div class="col-12 mb-4">
            <div class="card-esencia p-0 overflow-hidden border-magenta" style="background: #121212;">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4 bg-black text-center p-4">
                        <img src="{{ asset('img/patek_philippe_nautilius.png') }}" class="img-fluid img-catalog" style="max-height: 300px;" alt="Master Edition">
                    </div>
                    <div class="col-md-8">
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <span class="text-white hansip-font" style="font-size: 0.7rem;">CHRONO MASTER // SERIES-X</span>
                                    <h3 class="hansip-font h2 text-white mb-0">EDICIÓN <span class="text-white">IMPERIAL</span></h3>
                                </div>
                                <span class="text-white h3 hansip-font">$450.000</span>
                            </div>
                            <p class="text-white fs-5 mb-4">
                                Ingeniería de precisión suiza envuelta en titanio grado 5. El estandarte de nuestra casa para el profesional moderno.
                                <span class="text-white">Cristal de zafiro irrompible y movimiento automático de 40 rubíes.</span>
                            </p>
                            <div class="d-flex gap-3 mb-4">
                                <div class="text-white px-3 py-2">MOV. AUTOMÁTICO</div>
                                <div class="text-white px-3 py-2">TITANIO G5</div>
                                <div class="text-white px-3 py-2">10 ATM</div>
                            </div>
                            <button class="btn-stanley-legend px-5 py-3 btn-glitch">ADQUIRIR PIEZA</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-esencia h-100 p-0 overflow-hidden border-magenta card-glow">
                <div class="product-header px-3 py-2 d-flex justify-content-between align-items-center">
                    <span class="text-secondary small hansip-font">IR-001 // NIGHT</span>
                    <span class="badge rounded-pill bg-magenta" style="font-size: 0.5rem;">TOP_SALES</span>
                </div>
                <div class="bg-black text-center p-4">
                    <img src="{{ asset('img/The_GMT-Master_verde.png') }}" class="img-fluid img-catalog" alt="Shadow Black">
                </div>
                <div class="p-4 border-top border-secondary bg-dark-gradient">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h3 class="hansip-font h5 text-black mb-0">SHADOW BLACK</h3>
                        <span class="text-white fw-bold">$120.000</span>
                    </div>
                    <p class="text-secondary small mb-3">Minimalismo absoluto. Acabado en negro mate industrial con detalles en fibra de carbono.</p>
                    <div class="d-flex gap-2 mb-4">
                        <span class="badge-tech">CUERO GENUINO</span>
                    </div>
                    <button class="btn-stanley-legend w-100 py-2 btn-glitch">VER DETALLES</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-esencia h-100 p-0 overflow-hidden">
                <div class="product-header px-3 py-2 d-flex justify-content-between align-items-center">
                    <span class="text-secondary small hansip-font">IR-002 // LUX</span>
                </div>
                <div class="bg-black text-center p-4">
                    <img src="{{ asset('img/The_GMT-Master__pepsi.png') }}" class="img-fluid img-catalog" alt="Golden Era">
                </div>
                <div class="p-4 border-top border-secondary">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h3 class="hansip-font h5 text-black mb-0">GOLDEN ERA</h3>
                        <span class="text-magenta fw-bold">$185.000</span>
                    </div>
                    <p class="text-secondary small mb-3">La elegancia del oro rosa combinada con una esfera blanca cerámica. Elegancia atemporal.</p>
                    <div class="d-flex gap-2 mb-4">
                        <span class="badge-tech">ORO ROSA</span>
                        <span class="badge-tech">CUARZO JAPONÉS</span>
                    </div>
                    <button class="btn-stanley-legend w-100 py-2">VER DETALLES</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-esencia h-100 p-0 overflow-hidden border-magenta card-glow">
                <div class="product-header px-3 py-2 d-flex justify-content-between align-items-center">
                    <span class="text-magenta small hansip-font">IR-003 // LIMITED</span>
                    <span class="badge rounded-pill bg-magenta" style="font-size: 0.5rem;">NEW_DROP</span>
                </div>
                <div class="bg-black text-center p-4">
                    <img src="{{ asset('img/Rolex_Oyster_Perpetual_Day-Date_40.png') }}" class="img-fluid img-catalog" alt="Ocean Deep">
                </div>
                <div class="p-4 border-top border-secondary bg-dark-gradient">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h3 class="hansip-font h5 text-black mb-0">OCEAN DEEP</h3>
                        <span class="text-magenta fw-bold">$145.000</span>
                    </div>
                    <p class="text-secondary small mb-3">Diseño sumergible con bisel giratorio y manecillas luminiscentes para la oscuridad total.</p>
                    <div class="d-flex gap-2 mb-4">
                        <span class="badge-tech">300M DEPTH</span>
                        <span class="badge-tech">ACERO 316L</span>
                    </div>
                    <button class="btn-stanley-legend w-100 py-2 btn-glitch">VER DETALLES</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-esencia h-100 p-0 overflow-hidden border-magenta card-glow">
                <div class="product-header px-3 py-2 d-flex justify-content-between align-items-center">
                    <span class="text-magenta small hansip-font">IR-004 // LIMITED</span>
                    <span class="badge rounded-pill bg-magenta" style="font-size: 0.5rem;">NEW_DROP</span>
                </div>
                <div class="bg-black text-center p-4">
                    <img src="{{ asset('img/Rolex_Cosmograph_Daytona_Reference_126502.png') }}" class="img-fluid img-catalog" alt="Ocean Deep">
                </div>
                <div class="p-4 border-top border-secondary bg-dark-gradient">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h3 class="hansip-font h5 text-black mb-0">OCEAN DEEP</h3>
                        <span class="text-magenta fw-bold">$145.000</span>
                    </div>
                    <p class="text-secondary small mb-3">Diseño sumergible con bisel giratorio y manecillas luminiscentes para la oscuridad total.</p>
                    <div class="d-flex gap-2 mb-4">
                        <span class="badge-tech">300M DEPTH</span>
                        <span class="badge-tech">ACERO 316L</span>
                    </div>
                    <button class="btn-stanley-legend w-100 py-2 btn-glitch">VER DETALLES</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-esencia h-100 p-0 overflow-hidden border-magenta card-glow">
                <div class="product-header px-3 py-2 d-flex justify-content-between align-items-center">
                    <span class="text-magenta small hansip-font">IR-005 // LIMITED</span>
                    <span class="badge rounded-pill bg-magenta" style="font-size: 0.5rem;">NEW_DROP</span>
                </div>
                <div class="bg-black text-center p-4">
                    <img src="{{ asset('img/Code_11.59.png') }}" class="img-fluid img-catalog" alt="Ocean Deep">
                </div>
                <div class="p-4 border-top border-secondary bg-dark-gradient">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h3 class="hansip-font h5 text-black mb-0">OCEAN DEEP</h3>
                        <span class="text-magenta fw-bold">$145.000</span>
                    </div>
                    <p class="text-secondary small mb-3">Diseño sumergible con bisel giratorio y manecillas luminiscentes para la oscuridad total.</p>
                    <div class="d-flex gap-2 mb-4">
                        <span class="badge-tech">300M DEPTH</span>
                        <span class="badge-tech">ACERO 316L</span>
                    </div>
                    <button class="btn-stanley-legend w-100 py-2 btn-glitch">VER DETALLES</button>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card-esencia h-100 p-0 overflow-hidden border-magenta card-glow">
                <div class="product-header px-3 py-2 d-flex justify-content-between align-items-center">
                    <span class="text-magenta small hansip-font">IR-006 // LIMITED</span>
                    <span class="badge rounded-pill bg-magenta" style="font-size: 0.5rem;">NEW_DROP</span>
                </div>
                <div class="bg-black text-center p-4">
                    <img src="{{ asset('img/Royal_Oak_Jumbo.png') }}" class="img-fluid img-catalog" alt="Ocean Deep">
                </div>
                <div class="p-4 border-top border-secondary bg-dark-gradient">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h3 class="hansip-font h5 text-black mb-0">OCEAN DEEP</h3>
                        <span class="text-magenta fw-bold">$145.000</span>
                    </div>
                    <p class="text-secondary small mb-3">Diseño sumergible con bisel giratorio y manecillas luminiscentes para la oscuridad total.</p>
                    <div class="d-flex gap-2 mb-4">
                        <span class="badge-tech">300M DEPTH</span>
                        <span class="badge-tech">ACERO 316L</span>
                    </div>
                    <button class="btn-stanley-legend w-100 py-2 btn-glitch">VER DETALLES</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-esencia h-100 p-0 overflow-hidden border-magenta card-glow">
                <div class="product-header px-3 py-2 d-flex justify-content-between align-items-center">
                    <span class="text-magenta small hansip-font">IR-007 // LIMITED</span>
                    <span class="badge rounded-pill bg-magenta" style="font-size: 0.5rem;">NEW_DROP</span>
                </div>
                <div class="bg-black text-center p-4">
                    <img src="{{ asset('img/cartier_Tank_Normale.png') }}" class="img-fluid img-catalog" alt="Ocean Deep">
                </div>
                <div class="p-4 border-top border-secondary bg-dark-gradient">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h3 class="hansip-font h5 text-black mb-0">OCEAN DEEP</h3>
                        <span class="text-magenta fw-bold">$145.000</span>
                    </div>
                    <p class="text-secondary small mb-3">Diseño sumergible con bisel giratorio y manecillas luminiscentes para la oscuridad total.</p>
                    <div class="d-flex gap-2 mb-4">
                        <span class="badge-tech">300M DEPTH</span>
                        <span class="badge-tech">ACERO 316L</span>
                    </div>
                    <button class="btn-stanley-legend w-100 py-2 btn-glitch">VER DETALLES</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-esencia h-100 p-0 overflow-hidden border-magenta card-glow">
                <div class="product-header px-3 py-2 d-flex justify-content-between align-items-center">
                    <span class="text-magenta small hansip-font">IR-008 // LIMITED</span>
                    <span class="badge rounded-pill bg-magenta" style="font-size: 0.5rem;">NEW_DROP</span>
                </div>
                <div class="bg-black text-center p-4">
                    <img src="{{ asset('img/cartier_Tortue_Chronographe_Monopoussoir.png') }}" class="img-fluid img-catalog" alt="Ocean Deep">
                </div>
                <div class="p-4 border-top border-secondary bg-dark-gradient">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h3 class="hansip-font h5 text-black mb-0">OCEAN DEEP</h3>
                        <span class="text-magenta fw-bold">$145.000</span>
                    </div>
                    <p class="text-secondary small mb-3">Diseño sumergible con bisel giratorio y manecillas luminiscentes para la oscuridad total.</p>
                    <div class="d-flex gap-2 mb-4">
                        <span class="badge-tech">300M DEPTH</span>
                        <span class="badge-tech">ACERO 316L</span>
                    </div>
                    <button class="btn-stanley-legend w-100 py-2 btn-glitch">VER DETALLES</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-esencia h-100 p-0 overflow-hidden border-magenta card-glow">
                <div class="product-header px-3 py-2 d-flex justify-content-between align-items-center">
                    <span class="text-magenta small hansip-font">IR-009 // LIMITED</span>
                    <span class="badge rounded-pill bg-magenta" style="font-size: 0.5rem;">NEW_DROP</span>
                </div>
                <div class="bg-black text-center p-4">
                    <img src="{{ asset('img/omega_speedmaster_moonwatch.png') }}" class="img-fluid img-catalog" alt="Ocean Deep">
                </div>
                <div class="p-4 border-top border-secondary bg-dark-gradient">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h3 class="hansip-font h5 text-black mb-0">OCEAN DEEP</h3>
                        <span class="text-magenta fw-bold">$145.000</span>
                    </div>
                    <p class="text-secondary small mb-3">Diseño sumergible con bisel giratorio y manecillas luminiscentes para la oscuridad total.</p>
                    <div class="d-flex gap-2 mb-4">
                        <span class="badge-tech">300M DEPTH</span>
                        <span class="badge-tech">ACERO 316L</span>
                    </div>
                    <button class="btn-stanley-legend w-100 py-2 btn-glitch">VER DETALLES</button>
                </div>
            </div>
        </div>




        
    </div>
</div>

@endsection