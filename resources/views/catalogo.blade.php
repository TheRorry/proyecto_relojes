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
                                    <h3 class="hansip-font h2 text-white mb-0">PATEK PHILIPPE <span class="text-white">NAUTILIUS</span></h3>
                                </div>
                                <span class="text-white h3 hansip-font">$450.000</span>
                            </div>
                            <p class="text-white fs-5 mb-4">
                                Ingeniería de precisión suiza envuelta en titanio grado 5. El estandarte de nuestra casa para el coleccionista moderno. Presenta un cristal de zafiro irrompible y un movimiento mecánico de 40 rubíes visible a través del fondo de caja
                            </p>
                            <div class="d-flex gap-3 mb-4">
                                <div class="text-white px-3 py-2">MOV. AUTOMÁTICO</div>
                                <div class="text-white px-3 py-2">TITANIO G5</div>
                                <div class="text-white px-3 py-2">10 ATM</div>
                            </div>
                            <button onclick="mensajeProximamente()" class="btn-stanley-legend px-5 py-3 btn-glitch">ADQUIRIR PIEZA</button>
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
                        <h3 class="hansip-font h5 text-black mb-0">Rolex GMT-Master Verde</h3>
                        <span class="text-white fw-bold">$120.000</span>
                    </div>
                    <p class="text-secondary small mb-3">Una pieza que redefine el concepto de 'reloj de herramientas'. Su bisel cerámico bicolor y la esfera verde bosque contrastan con un brazalete Oyster de acero quirúrgico, diseñado para resistir las condiciones más extremas sin perder la elegancia.</p>
                    <div class="d-flex gap-2 mb-4">
                        <span class="badge-tech">CUERO GENUINO</span>
                    </div>
                    <button onclick="mensajeProximamente()" class="btn-stanley-legend px-5 py-3 btn-glitch">ADQUIRIR PIEZA</button>
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
                        <h3 class="hansip-font h5 text-black mb-0">Rolex GMT-Master Pepsi</h3>
                        <span class="text-magenta fw-bold">$185.000</span>
                    </div>
                    <p class="text-secondary small mb-3">El regreso de un ícono. Esta pieza rinde homenaje a la era dorada de la aviación con su emblemático bisel azul y rojo. Equipado con un movimiento automático de última generación, permite seguir dos zonas horarias con una precisión cronométrica absoluta.</p>
                    <div class="d-flex gap-2 mb-4">
                        <span class="badge-tech">ORO ROSA</span>
                        <span class="badge-tech">CUARZO JAPONÉS</span>
                    </div>
                    <button onclick="mensajeProximamente()" class="btn-stanley-legend px-5 py-3 btn-glitch">ADQUIRIR PIEZA</button>
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
                        <h3 class="hansip-font h5 text-black mb-0">Rolex Oyster_Perpetual Day-Date 40 (President)</h3>
                        <span class="text-magenta fw-bold">$145.000</span>
                    </div>
                    <p class="text-secondary small mb-3">El reloj de los grandes líderes. Forjado íntegramente en oro de 18 quilates con una esfera de lectura instantánea. Su brazalete President, de eslabones semicirculares, ofrece una comodidad y un brillo que solo Imperial puede garantizar.</p>
                    <div class="d-flex gap-2 mb-4">
                        <span class="badge-tech">300M DEPTH</span>
                        <span class="badge-tech">ACERO 316L</span>
                    </div>
                    <button onclick="mensajeProximamente()" class="btn-stanley-legend px-5 py-3 btn-glitch">ADQUIRIR PIEZA</button>
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
                        <h3 class="hansip-font h5 text-black mb-0">Rolex Cosmograph Daytona Reference 126502</h3>
                        <span class="text-magenta fw-bold">$145.000</span>
                    </div>
                    <p class="text-secondary small mb-3">El cronógrafo de lujo por excelencia, diseñado para satisfacer las necesidades de los pilotos de alta competición. Un equilibrio impecable entre robustez deportiva y sofisticación estética que lo convierte en una pieza de inversión.</p>
                    <div class="d-flex gap-2 mb-4">
                        <span class="badge-tech">300M DEPTH</span>
                        <span class="badge-tech">ACERO 316L</span>
                    </div>
                    <button onclick="mensajeProximamente()" class="btn-stanley-legend px-5 py-3 btn-glitch">ADQUIRIR PIEZA</button>
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
                        <h3 class="hansip-font h5 text-black mb-0">Audemars Piguet Code 11.59</h3>
                        <span class="text-magenta fw-bold">$145.000</span>
                    </div>
                    <p class="text-secondary small mb-3">Una obra maestra de la geometría moderna que desafía el diseño convencional. Presenta cristal de zafiro de doble curvatura y una esfera lacada con un acabado profundo que cambia según la incidencia de la luz. Es la unión perfecta entre la tradición artesanal y el vanguardismo técnico.</p>
                    <div class="d-flex gap-2 mb-4">
                        <span class="badge-tech">300M DEPTH</span>
                        <span class="badge-tech">ACERO 316L</span>
                    </div>
                    <button onclick="mensajeProximamente()" class="btn-stanley-legend px-5 py-3 btn-glitch">ADQUIRIR PIEZA</button>
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
                        <h3 class="hansip-font h5 text-black mb-0">Audemars Piguet Royal Oak Jumbo</h3>
                        <span class="text-magenta fw-bold">$145.000</span>
                    </div>
                    <p class="text-secondary small mb-3">Arquitectura pura para la muñeca. Su diseño octogonal con tornillos hexagonales expuestos revela la maestría del movimiento esqueletado. Una pieza donde la mecánica se convierte en arte, forjada en acero de alta resistencia</p>
                    <div class="d-flex gap-2 mb-4">
                        <span class="badge-tech">300M DEPTH</span>
                        <span class="badge-tech">ACERO 316L</span>
                    </div>
                    <button onclick="mensajeProximamente()" class="btn-stanley-legend px-5 py-3 btn-glitch">ADQUIRIR PIEZA</button>
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
                        <h3 class="hansip-font h5 text-black mb-0">Cartier Tank Normale</h3>
                        <span class="text-magenta fw-bold">$145.000</span>
                    </div>
                    <p class="text-secondary small mb-3">: Un tributo a la pureza de líneas. Su caja rectangular inspirada en los tanques de la Gran Guerra combina el diseño histórico de 1917 con una esfera de números romanos y zafiro en la corona, definiendo el lujo clásico francés.</p>
                    <div class="d-flex gap-2 mb-4">
                        <span class="badge-tech">300M DEPTH</span>
                        <span class="badge-tech">ACERO 316L</span>
                    </div>
                    <button onclick="mensajeProximamente()" class="btn-stanley-legend px-5 py-3 btn-glitch">ADQUIRIR PIEZA</button>
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
                        <h3 class="hansip-font h5 text-black mb-0">Omega Speedmaster Moonwatch</h3>
                        <span class="text-magenta fw-bold">$145.000</span>
                    </div>
                    <p class="text-secondary small mb-3">El primer reloj en llegar a la Luna. Famoso por su resistencia y su bisel con escala taquimétrica, este cronógrafo de cuerda manual representa la máxima aventura humana y la fiabilidad técnica aeroespacial.</p>
                    <div class="d-flex gap-2 mb-4">
                        <span class="badge-tech">300M DEPTH</span>
                        <span class="badge-tech">ACERO 316L</span>
                    </div>
                    <button onclick="mensajeProximamente()" class="btn-stanley-legend px-5 py-3 btn-glitch">ADQUIRIR PIEZA</button>
                </div>
            </div>
        </div>




        
    </div>
</div>

<script>
function mensajeProximamente() {
    Swal.fire({
        title: '<span class="hansip-font" style="color: #000000;">LO SENTIMOS</span>',
        html: '<p style="color: #000000;">Pieza momentáneamente fuera de stock. Próximamente disponible para reserva oficial.</p>',
        icon: 'info',
        iconColor: '#000000', 
        confirmButtonText: 'ENTENDIDO',
        confirmButtonColor: '#121212',
        background: '#ffffff',
        backdrop: `rgba(18,18,18,0.8)`
    });
}
</script>

@endsection