@extends('front.layout.quote.main')

@section('content')
    <section class="hero">
        <img src="{{ asset('img/' . $quote->image) }}">
        <div class="container-fluid">
            <div class="row px-3">
                <div class="col-md-7">
                    <h1>Proposal</h1>
                </div>
                <div class="col-md-4 offset-md-1">
                    <p>Todo proyecto tiene potencial de crecimiento, tu página puede ser más de lo que empezó y estoy aquí
                        para lograr ese objetivo contigo.
                        Ofrezco soluciones de desarrollo web personalizadas y eficientes, utilizando las últimas tecnologías
                        para garantizar la máxima calidad y rendimiento.</p>
                </div>
                <div class="col-md-12 pb-2">
                    <hr>
                    <div class="row justify-content-between">
                        <div class="col-md-8 row">
                            <div class="col-md-4">
                                <h5>Cliente:</h5>
                                <p>{{ $quote->client->name }}</p>
                            </div>
                            <div class="col-md-4">
                                <h5>Fecha:</h5>
                                <p>{{ Carbon\Carbon::parse($quote->creation_date)->translatedFormat('d M Y') }}</p>
                            </div>
                            <div class="col-md-4">
                                <h5>Fecha de expiración:</h5>
                                <p>{{ Carbon\Carbon::parse($quote->creation_date)->addDays(30)->translatedFormat('d M Y') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 row">
                            <div class="col-6">
                                <h5>Por:</h5>
                                <p>Noé Hassiel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dark-s section">
        <div class="container-fluid">
            <div class="row px-3">
                <div class="col-md-7 offset-md-4">
                    <h1>You know me</h1>
                    <p>Mi misión es crear, diseñar y desarrollar productos útiles, originales y valiosos., entender las
                        tareas del cliente, y ofrecer la solución más relevante y ser un agente de cambio y crecimiento para
                        su empresa.</p>
                    <p>Siempre quise crear cosas nuevas, experiencias únicas, incursionar en el desarrollo web cambió muchas
                        cosas para mí, y desde entonces trato de llevar mi trabajo a nuevos horizontes con cada proyecto,
                        siempre anteponiendo la calidad.</p>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>email</h6>
                            <h4><a href="mailto:hello@noehassiel.com" class="text-white">hello@noehassiel.com</a></h4>
                        </div>
                        <div class="col-md-6">
                            <h6>phone</h6>
                            <h4><a href="tel:+524721118348" class="text-white">+52 (472) 111 8348</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-s section">
        <div class="container-fluid">
            <div class="row px-3">
                <div class="col-md-7">
                    <h2>Project Brief</h2>
                    <h3>Visión General</h3>
                    <p>{{ $quote->general_vision }}</p>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
                <div class="col-md-7">
                    <h3>Soluciones</h3>
                    <p>{{ $quote->solutions }}</p>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
                <div class="col-md-7">
                    <h3>Por Definir</h3>
                    <p>{{ $quote->to_define }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="dark-s section">
        <div class="container-fluid">
            <div class="row px-3">
                <h2>Etapas</h2>
                <div class="col-md-12 mb-5">
                    <div class="row">
                        <div class="col-md-2 timeline-bar text-center">
                            <h6>{{ $quote->first_stage_name }}</h6>
                            <div class="bar"></div>
                            <p>{{ $quote->first_stage_time }}</p>
                        </div>
                        <div class="col-md-4 timeline-bar text-center">
                            <h6>{{ $quote->second_stage_name }}</h6>
                            <div class="bar"></div>
                            <p>{{ $quote->second_stage_time }}</p>
                        </div>
                        <div class="col-md-4 timeline-bar text-center">
                            <h6>{{ $quote->third_stage_name }}</h6>
                            <div class="bar"></div>
                            <p>{{ $quote->third_stage_time }}</p>
                        </div>
                        <div class="col-md-2 timeline-bar text-center">
                            <h6>{{ $quote->first_stage_name }}</h6>
                            <div class="bar"></div>
                            <p>{{ $quote->first_stage_time }}</p>
                        </div>
                    </div>
                    <h5 class="mt-4">Tiempo Estimado: {{ $quote->estimated_time }}</h5>
                </div>

                <div class="col-md-3">
                    <h3>{{ $quote->first_stage_name }}</h3>
                </div>
                <div class="col-md-9">
                    <p>{{ $quote->first_stage_description }}</p>

                    <small class="text-danger">*En caso de que el cliente requiera otro módulo o funcionamiento fuera del
                        documento de
                        requerimientos técnicos, se tendrá que cotizar aparte y aplazar los tiempos de entrega.</small>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>

                <div class="col-md-3">
                    <h3>{{ $quote->second_stage_name }}</h3>
                </div>
                <div class="col-md-9">
                    <p>{{ $quote->second_stage_description }}</p>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>

                <div class="col-md-3">
                    <h3>{{ $quote->third_stage_name }}</h3>
                </div>
                <div class="col-md-9">
                    <p>{{ $quote->third_stage_description }}</p>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>

                <div class="col-md-3">
                    <h3 style="font-size:3vw">{{ $quote->fourth_stage_name }}</h3>
                </div>
                <div class="col-md-9">
                    <p>{{ $quote->fourth_stage_description }}</p>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>

            </div>
        </div>
    </section>

    <section class="white-s section">
        <div class="container-fluid">
            <div class="row px-3">
                <h2>Presupuesto y Términos + Condiciones</h2>
                <hr>
                <div class="col-md-5 mb-5"
                    style="background-image: url({{ asset('img/d2.jpg') }}); background-repeat: no-repeat;
background-size: cover;">
                </div>
                <div class="col-md-7 mb-5">
                    <h3>Presupuesto</h3>
                    <div class="table-price p-4">
                        <div class="title-table d-flex justify-content-between px-1 align-items-center">
                            <h4>{{ $quote->title }}</h4>
                            <h4>{{ $quote->creation_date }}</h4>
                        </div>
                        <hr>

                        @foreach ($quote->projects as $project)
                            <div class="d-block d-md-flex px-1 justify-content-between align-items-center mt-5">
                                <div>
                                    <h5>{{ $project->project_name }}</h5>
                                    <p>
                                        {{ $project->project_description }}
                                    </p>
                                </div>
                                <div>
                                    <h4>$ {{ $project->cost }}</h4>
                                </div>
                            </div>
                        @endforeach

                        <hr>
                        <ul>
                            <li>
                                <p>3 Pagos</p>
                                <ul>
                                    <li>
                                        <p>Primero: Depósito del 50% antes de iniciar el proyecto</p>
                                    </li>
                                    <li>
                                        <p>Segundo: Una vez terminada la fase de implementación</p>
                                    </li>
                                    <li>
                                        <p>Tercero: Una vez terminado el Testing para así entregar el proyecto en servidor
                                        </p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-7 pe-5">
                    <h3>Términos + Condiciones</h3>
                    <ol>
                        <li>
                            <p>Si el proyecto no se completa dentro de los 45 días posteriores a la fecha estimada de
                                finalización del proyecto o debido a demoras del cliente en proporcionar comentarios,
                                activos, aprobaciones, contenido, dirección, etc., nos reservamos el derecho de discutir y
                                enviar una orden de cambio para acomodar gastos imprevistos debido a la extensión no
                                planificada del proyecto</p>
                        </li>
                        <li>
                            <p>Los plazos del proyecto varían según los tiempos de respuesta de los comentarios de los
                                clientes . Los plazos estimados proporcionados en este documento se basan en la suposición
                                de que el cliente proporcionará comentarios y aprobaciones dentro de una semana después de
                                cada entregable</p>
                        </li>
                        <li>
                            <p>La presente cotización está sujeta a cambios si los alcances del proyecto se modifican</p>
                        </li>
                        <li>
                            <p>La cotización tiene una vigencia de 1 mes a partir de la fecha indicada en este documento
                                para ser aceptada y se respete el precio</p>
                        </li>
                        <li>
                            <p>No esta incluido precios de:
                            <ul>
                                <li>Dominio</li>
                                <li>Servidor</li>
                                <li>Certificado de seguridad</li>
                                <li>Servidor para correos electrónicos</li>
                            </ul>
                            </p>
                        </li>
                        <li>
                            <p>Es necesario tener la infraestructura web apta para la funcionalidad del sitio. El cliente
                                proveerá de esta</p>
                        </li>
                        <li>
                            <p>El código es propiedad intelectual de @noehassiel</p>
                        </li>
                        <li>
                            <p>@noehassiel tendrá derecho a utilizar la imagen gráfica desarrollada únicamente para
                                portafolio de trabajo</p>
                        </li>
                        <li>
                            <p>El cliente deberá cumplir con sus tareas para que el sistema funcione manera optima y se
                                entregue en los tiempos pactados. </p>
                        </li>
                        <li>
                            <p>Las tareas de cliente son:
                            <ol>
                                <li>Leer, revisión, comentarios y aprobación de requerimientos técnicos.</li>
                                <li>Brindar todos los puntos necesarios de infraestructura web antes de iniciar el proyecto
                                </li>
                                <li>Realizar las pruebas del sistema y hacer listado de todos los errores o comentarios.
                                </li>
                            </ol>
                            </p>
                        </li>
                        <li>
                            <p>Una vez entregado el proyecto inicia la garantía de <strong>30 días </strong> donde se podrán
                                hacer cambios
                                (todos relacionados con funcionamiento y/o contenido, no funcionalidad. En caso de ser así
                                se cotizará aparte.). <strong> Después de los 30 días cualquier cambio se cobrará
                                    aparte.</strong></p>
                        </li>
                    </ol>
                </div>
                <div class="col-md-5 mb-5"
                    style="background-image: url({{ asset('img/download.jpg') }});background-repeat: no-repeat;
background-size: cover;">
                </div>
            </div>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header align-items-baseline">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Obten tu cotización</h1>
                        <p>Si quieres descargar la cotización ingresa la contraseña que se proporciono y tu correo para que
                            te llegue.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('send.email') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="" class="mb-1">Correo Electrónico</label>
                            <input type="email" name="email" class="form-control" autocomplete="off">
                        </div>

                        <div class="form-group mb-3">
                            <label for="" class="mb-1">Nombre</label>
                            <input type="text" name="name" class="form-control" autocomplete="off">
                        </div>

                        <div class="form-group mb-3">
                            <label for="" class="mb-1">Contraseña</label>
                            <input type="password" id="pass" name="password" class="form-control">
                        </div>

                        <button id="sub" class="btn btn-outline-light w-100" style="display: none"
                            type="submit">Obtener</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

            $('#pass').blur(function(e) {
                e.preventDefault();


                var password = $('#pass').val();

                var correct = '{{ $quote->password }}';

                if (password == correct) {

                    $('#sub').show();

                } else {
                    $("#pass").effect("shake");
                    $('#pass').val('');
                    $('#pass').css('border-color', 'red');
                    $('#pass').attr('placeholder', 'Esa no es eee, intenta de nuevo');
                }
            });
        });
    </script>
@endpush
