 <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->

                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

      <ul class="nav navbar-nav">
        
         @if (!Auth::guest())
         
        
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros <span class="caret"></span></a>
          <ul class="dropdown-menu">
          	<li><a href="{{ route('cliente.index')}}">Clientes</a></li>
            <li>   <li><a href="{{ route('empresa.index')}}">Empresa</a></li></li>
            <li>   <li><a href="{{ route('entregador.index')}}">Entregadores</a></li></li>
             <li>   <li><a href="{{ route('produto.index')}}">Produtos </a></li></li>
            <li role="separator" class="divider"></li>
             <li>   <li><a href="{{ route('pedido.index')}}">Pedido </a></li></li>
            <li role="separator" class="divider"></li>
             
          </ul>
        </li>
        <li><a href="{{ route('cliente.index')}}">Clientes</a></li>
         <li><a href="{{ route('pedido.index')}}">Pedidos	</a></li>
             
         @endif
      </ul>

             

            
       
    </div>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Entrar</a></li>
                        <li><a href="{{ url('/register') }}">Registrar</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Finalizar Sessão!
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>