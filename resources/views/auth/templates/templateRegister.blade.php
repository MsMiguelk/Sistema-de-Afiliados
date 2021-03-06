@inject('categories', 'App\Models\Category')

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{$title or 'Blog EspecializaTi'}}</title>
<!--Fonts-->
        <link rel="stylesheet" href="{{url('assets/painel/css/font-awesome.min.css')}}">
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--CSS login register-->
        <link rel="stylesheet" href="{{url('assets/painel/css/login-especializati.css')}}">
        <!--CSS Person-->
        <link rel="stylesheet" href="{{url('assets/portal/css/especializati.css')}}">

        <!--CSS Person-->
        <link rel="stylesheet" href="{{url('assets/portal/css/especializati-reset.css')}}">

        <!--CSS Person-->
        <link rel="stylesheet" href="{{url('assets/portal/css/especializati-responsive.css')}}">

        <!--Favicon-->
        <link rel="icon" type="image/png" href="{{url('assets/all/imgs/favicon.png')}}">
    </head>
    <body>

        <header class="top">
            <div class="container">
                <div class="logo col-md-6">
                    <a href="{{url('/')}}">
                       <!-- <img src="{{url('assets/portal/imgs/logo-especializati.png')}}" alt="EspecializaTi" class="logo">-->
                    </a>
                </div>

                 <!-- login-->
                <div class="col-md-3"></div>
                <div class="login-acesso col-md-3">
                    <a href="{{url('/login')}}">
                    <i class="fa fa-sign-in" aria-hidden="true"> Área, Afiliado</i>

                     </a>
                </div>
            </div><!--End Container-->
        </header><!--End Header TOP-->


        <div class="menu">
            <div class="container container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{url('/')}}">Home</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach( $categories->all() as $category )
                                    <li><a href="{{url("/categoria/{$category->url}")}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{url('como-funciona')}}">Como Funciona</a></li>
                        <li><a href="{{url('empresa')}}">Empresa</a></li>
                        <li><a href="{{url('contato')}}">Contato</a></li>

                    </ul>

                </div><!--/.nav-collapse -->
            </div>
        </div><!--End Menu-->


        <div class="container">

 <div class="col-md-3"></div>
    <div class="col-md-6">
        <section class="login bg-register">
             <div class="topo-login">
                CADASTRE-SE <BR>PREENCHA OS CAMPOS ABAIXO!!!
            </div>
            <div class="image-login">
                <!--<img src="{{url('assets/portal/imgs/logo-especializati.png')}}" alt="EspecializaTi" class="logo-painel">-->
            </div>
            
            @if( isset($errors) && count($errors) > 0 )
            <div class="alert alert-warning">
                @foreach($errors->all() as $error)
                <p>{{$error}}</p>
                @endforeach
            </div>
            @endif

            @yield('content-register')

        </section>
    </div>
 <div class="col-md-3"></div>
        </div><!--End Container-->


        <footer class="footer">
            <p class="footer">Todos os direitos reservados - Mailson {{date('Y')}}</p>
        </footer>


        <!--jQuery-->
        <script src="{{url('assets/all/js/jquery-3.1.1.min.js')}}"></script>
        
        @stack('scripts')

        <!--Bootstrap .js-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>