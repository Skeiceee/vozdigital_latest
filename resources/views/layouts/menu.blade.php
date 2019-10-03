<div id="menu" class="col-md p-0">
    <div class="card mb-3">
        <div class="container">
            <div id="menu_wrapper" class="p-4">
                <div class="d-flex flex-wrap">
                    <div style="width: 150px">
                        <div class="text-muted py-1">
                            <i class="fas fa-globe-americas"></i><span class="ml-2 font-weight-bold">General</span>
                        </div>
                        <ul class="nav flex-column">
                            <li id="dashboard" class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
                            </li>
                            <li id="dashboard" class="nav-item">
                                <a class="nav-link" href="{{ route('traffic.index') }}">Tráfico</a>
                            </li>
                        </ul>
                    </div>
                    <div style="width: 150px">
                        <div class="text-muted py-1">
                            <i class="fas fa-calculator"></i><span class="ml-2 font-weight-bold">Contable</span>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('revenues.index') }}">Consumos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('accesscharge.index') }}">Cargos de acceso</a>
                            </li>
                        </ul>
                    </div>
                    <div style="width: 150px">
                        <div class="text-muted py-1">
                            <i class="fas fa-archive"></i><span class="ml-2 font-weight-bold">administración</span>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('numeration.index') }}">Numeración</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>