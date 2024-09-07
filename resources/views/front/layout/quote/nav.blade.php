<nav class="container-fluid">
    <div class="d-flex align-items-center justify-content-between px-md-3 px-1">
        <h1 class="logo">
            noehassiel
        </h1>

        @if (!request()->is('/auth/quote/*'))
        @else
            <button type="button" class="button button--surtur d-md-inline-block d-none" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                <svg class="textcircle" viewBox="0 0 500 500">
                    <title>Descargar la Cotización :)</title>
                    <defs>
                        <path id="textcircle" d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z" />
                    </defs>
                    <text>
                        <textPath xlink:href="#textcircle" aria-label="Projects & client work 2020" textLength="900"> (:
                            Descargar
                            Cotización :)</textPath>
                    </text>
                </svg>
                <svg aria-hidden="true" class="eye" width="70" height="70" viewBox="0 0 70 70"
                    xmlns="http://www.w3.org/2000/svg">
                    <path class="eye__outer"
                        d="M10.5 35.308c5.227-7.98 14.248-13.252 24.5-13.252s19.273 5.271 24.5 13.252c-5.227 7.98-14.248 13.253-24.5 13.253s-19.273-5.272-24.5-13.253z" />
                    <path class="eye__lashes-up"
                        d="M35 8.802v8.836M49.537 11.383l-3.31 8.192M20.522 11.684l3.31 8.192" />
                    <path class="eye__lashes-down"
                        d="M35 61.818v-8.836 8.836zM49.537 59.237l-3.31-8.193 3.31 8.193zM20.522 58.936l3.31-8.193-3.31 8.193z" />
                    <circle class="eye__iris" cx="35" cy="35.31" r="5.221" />
                    <circle class="eye__inner" cx="35" cy="35.31" r="10.041" />
                </svg>
            </button>
        @endif

        <div class="d-md-none d-block">
            <a href="javascript:void(0)" id="menu" class="btn btn-link text-white">menú</a>
        </div>
    </div>
</nav>

<div id="nav-movil"
    class="d-flex d-md-none position-fixed w-100 h-100 top-0 movil px-4 py-5 movil-nav flex-column justify-content-center align-items-center">


    <button type="button" class="button button--surtur" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <svg class="textcircle" viewBox="0 0 500 500">
            <title>Descargar la Cotización :)</title>
            <defs>
                <path id="textcircle" d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z" />
            </defs>
            <text>
                <textPath xlink:href="#textcircle" aria-label="Projects & client work 2020" textLength="900"> (:
                    Descargar
                    Cotización :)</textPath>
            </text>
        </svg>
        <svg aria-hidden="true" class="eye" width="70" height="70" viewBox="0 0 70 70"
            xmlns="http://www.w3.org/2000/svg">
            <path class="eye__outer"
                d="M10.5 35.308c5.227-7.98 14.248-13.252 24.5-13.252s19.273 5.271 24.5 13.252c-5.227 7.98-14.248 13.253-24.5 13.253s-19.273-5.272-24.5-13.253z" />
            <path class="eye__lashes-up" d="M35 8.802v8.836M49.537 11.383l-3.31 8.192M20.522 11.684l3.31 8.192" />
            <path class="eye__lashes-down"
                d="M35 61.818v-8.836 8.836zM49.537 59.237l-3.31-8.193 3.31 8.193zM20.522 58.936l3.31-8.193-3.31 8.193z" />
            <circle class="eye__iris" cx="35" cy="35.31" r="5.221" />
            <circle class="eye__inner" cx="35" cy="35.31" r="10.041" />
        </svg>
    </button>

    <a href="javascript:void(0)" id="close" class="btn btn-link text-dark">close menú</a>

</div>


@push('scripts')
    <script>
        $(document).ready(function() {
            $('#menu').on("click", function(e) {

                $('#nav-movil').addClass('view');
            });

            $('#close').on("click", function() {

                $('#nav-movil').removeClass('view');
            });
        });
    </script>
@endpush
