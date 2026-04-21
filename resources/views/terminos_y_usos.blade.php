@extends('plantilla')

@section('contenido')
<div class="container my-5 text-white">
    <div class="p-5 rounded-3 shadow-lg border" style="background-color: #1A2238; border-color: #C19A6B !important;">
        
        <h1 class="texto-dorado mb-4 text-center">Términos y Condiciones de Uso</h1>
        <p class="text-white-50 text-center mb-5">Última actualización: {{ date('d/m/Y') }}</p>

        <section class="mb-5">
            <h3 class="texto-dorado"><i class="bi bi-info-circle me-2"></i> 1. Aviso Legal</h3>
            <p>El presente sitio web es operado por <strong>Imperial Relojería S.R.L.</strong>. El acceso y uso de este sitio atribuye la condición de usuario e implica la aceptación de todos los términos aquí expuestos.</p>
        </section>

        <section class="mb-5">
            <h3 class="texto-dorado"><i class="bi bi-credit-card me-2"></i> 2. Condiciones de Venta</h3>
            <p>Todos los precios están expresados en pesos argentinos e incluyen IVA. Nos reservamos el derecho de modificar los precios sin previo aviso. La confirmación de compra está sujeta a la validación del medio de pago y disponibilidad de stock.</p>
        </section>

        <section class="mb-5">
            <h3 class="texto-dorado"><i class="bi bi-truck me-2"></i> 3. Envíos y Tiempos de Entrega</h3>
            <ul>
                <li><strong>Retiro Presencial:</strong> Disponible 24hs después de la compra.</li>
                <li><strong>Envíos Nacionales:</strong> Se realizan mediante correo especializado con seguro de valor declarado. El tiempo estimado es de 3 a 7 días hábiles.</li>
            </ul>
        </section>

        <section class="mb-5">
            <h3 class="texto-dorado"><i class="bi bi-shield-check me-2"></i> 4. Garantía y Soporte Postventa</h3>
            <p>Cada pieza cuenta con una Garantía de 5 años contra defectos de fabricación. No se cubren daños por uso indebido, rotura de cristales o desgaste natural de mallas de cuero.</p>
            <p>Contamos con servicio técnico especializado para el mantenimiento preventivo de piezas automáticas.</p>
        </section>

        <section class="mb-5">
            <h3 class="texto-dorado"><i class="bi bi-lock me-2"></i> 5. Política de Privacidad</h3>
            <p>Los datos personales recolectados a través del formulario de contacto son utilizados exclusivamente para la gestión comercial y no serán compartidos con terceros, de acuerdo a la Ley de Protección de Datos Personales.</p>
        </section>

        <div class="text-center mt-5">
            <p class="small text-white-50">Para más consultas sobre nuestros términos, puede dirigirse a la sección de <a href="{{ url('/informacion') }}" class="texto-dorado">Contacto</a>.</p>
        </div>

    </div>
</div>
@endsection