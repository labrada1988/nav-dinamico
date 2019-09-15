<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            {{-- recorremos el arreglo menu que pasamos desde el provider --}}
            @foreach ($menu as $item => $it)

                {{-- Esto funciona cuando tenemos subelementos como el dropdown --}}
                @if (is_array($it['child']) )
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ $it['btn'] }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            
                            @foreach ($it['child'] as $ch)
                                <a class="dropdown-item" href="/{{ $ch['route'] }}"> @lang($ch['btn']) </a>
                            
                                <div class="dropdown-divider"></div>
                            @endforeach
                        </div>
                    </li>
                @else
                    {{-- si no tiene seria un link normal --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/{{ $it['route'] }}">{!! $it['btn'] !!}</a>
                    </li>
                @endif

            @endforeach
        </ul>
    </div>
  </nav>