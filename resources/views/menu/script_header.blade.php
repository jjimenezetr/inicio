    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- inicio bootrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- fin bootrap -->
    <!-- inicio iconos extras  -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- fin iconos extras  -->
    <!-- inicio seleccion multiples -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <!-- fin seleccion multiples -->

    <style type="text/css">
        .loader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        /* background: url('{{ asset('imagen_carga/Cargando.gif') }}') 50% 50% no-repeat rgb(249,249,249); */
        background: url('img/cargando.gif') no-repeat center;
        opacity: .8;
    }
    /* inicio Estilo para input buscador de tada table */
    #buscador_tabla_filter input {
        border-radius: 50px;
    }
    /* fin Estilo para input buscador de tada table */
    #tarjeta{
        background-color:   #0099e6;
        color: white;
    }
/* implementacion de sidebar */
    .wrapper {
        display: flex;
        width: 100%;
        align-items: stretch;
    }
    .wrapper {
        display: flex;
        align-items: stretch;
    }

    #sidebar {
        min-width: 250px;
        max-width: 250px;
    }

    #sidebar.active {
        margin-left: -250px;
    }
    #sidebar {
        min-width: 250px;
        max-width: 250px;
        min-height: 100vh;
    }
    a[data-toggle="collapse"] {
        position: relative;
    }

    .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }
    @media (max-width: 768px) {
        #sidebar {
            margin-left: -250px;
        }
        #sidebar.active {
            margin-left: 0;
        }
    }
    #content{
        width:100%;
    }
    a[data-toggle="collapse"] {
        position: relative;
    }

    .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }
    a, a:hover, a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
    }
    .dropdown-item{
        color:white !important;
    }
    /* navbar color */
    .bg-gradient{
        background: linear-gradient(to right,#495aff  0, #0acffe 100%);
    }
    .navbar-collapse > a, a:hover, a:focus {
        /* color: rgba(255,255,255,0.9); */
        color: #2a93fe !important;
        text-decoration: none;
        transition: all 0.3s;
        border-radius: 5px;
        box-shadow: 7px 6px 17px -9px rgba(0,0,0,0.63);
    }
    .base{
        color: white !important;
    }
</style>
