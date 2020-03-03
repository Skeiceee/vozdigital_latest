@extends('layouts.app')
@section('content')
<section class="container-fluid mt-4">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-5 mx-auto">
            @include('Common.status')
            @include('Common.error')
            <div class="card">
                <div class="card-header">
                    <span><i class="fas fa-network-wired pr-1"></i> {{ $host->ip }}</span>
                </div>
                <div class="card-body">
                    <section class="landing">
                        <div class="container mx-auto">
                            <dl class="row text-center mb-1">

                            <div class="card-text w-100 rounded opacity pt-2" style="transform: rotate(0);">
                                <span class="top-right"><i class="far fa-copy"></i></span>
                                    <a class="stretched-link deco-none" id="copy" data-clipboard-text="{{ $host->ip }}">
                                    <dt class="col-sm-12 col-md-12 col-lg-12">Dirección IP</dt>
                                    <dd class="col-sm-12 col-md-12 col-lg-12">{{ $host->ip }}</dd>
                                </a>
                            </div>
                            @isset($host->ipvmware)
                                <div class="card-text w-100 rounded opacity pt-2" style="transform: rotate(0);">
                                    <span class="top-right"><i class="far fa-copy"></i></span>
                                    <a class="stretched-link deco-none pt-4" id="copy" data-clipboard-text="{{ $host->ipvmware }}">
                                        <dt class="col-sm-12 col-md-12 col-lg-12">IP VMware</dt>
                                        <dd class="col-sm-12 col-md-12 col-lg-12">{{ $host->ipvmware }}</dd>
                                    </a>
                                </div>
                            @endisset
                            @isset($host->port)
                                <div class="card-text w-100 rounded opacity pt-2" style="transform: rotate(0);">
                                    <span class="top-right"><i class="far fa-copy"></i></span>
                                    <a class="stretched-link deco-none pt-4" id="copy" data-clipboard-text="{{ $host->port }}">
                                        <dt class="col-sm-12 col-md-12 col-lg-12">Puerto</dt>
                                        <dd class="col-sm-12 col-md-12 col-lg-12">{{ $host->port }}</dd>
                                    </a>
                                </div>
                            @endisset  
                            @isset($host->username)
                                <div class="card-text w-100 rounded opacity pt-2" style="transform: rotate(0);">
                                    <span class="top-right"><i class="far fa-copy"></i></span>
                                    <a class="stretched-link deco-none pt-4" id="copy" data-clipboard-text="{{ $host->username }}">
                                        <dt class="col-sm-12 col-md-12 col-lg-12">Usuario</dt>
                                        <dd class="col-sm-12 col-md-12 col-lg-12">{{ $host->username }}</dd>
                                    </a>
                                </div>
                            @endisset
                            @isset($host->password)
                                <div class="card-text w-100 rounded opacity pt-2" style="transform: rotate(0);">
                                    <span class="top-right"><i class="far fa-copy"></i></span>
                                    <a class="stretched-link deco-none pt-4" id="copy" data-clipboard-text="{{ Crypt::decrypt($host->password) }}">
                                        <dt class="col-sm-12 col-md-12 col-lg-12">Contraseña</dt>
                                        <dd class="col-sm-12 col-md-12 col-lg-12">{{ Crypt::decrypt($host->password) }}</dd>
                                    </a>
                                </div>
                            @endisset
                            @isset($host->hostname)
                                <div class="card-text w-100 rounded opacity pt-2" style="transform: rotate(0);">
                                    <span class="top-right"><i class="far fa-copy"></i></span>
                                    <a class="stretched-link deco-none pt-4" id="copy" data-clipboard-text="{{ $host->hostname }}">
                                        <dt class="col-sm-12 col-md-12 col-lg-12">Hostname</dt>
                                        <dd class="col-sm-12 col-md-12 col-lg-12">{{ $host->hostname }}</dd>
                                    </a>
                                </div>
                            @endisset
                            @isset($host->server)
                                <div class="card-text w-100 rounded opacity pt-2" style="transform: rotate(0);">
                                    <span class="top-right"><i class="far fa-copy"></i></span>
                                    <a class="stretched-link deco-none pt-4" id="copy" data-clipboard-text="{{ $host->server }}">
                                        <dt class="col-sm-12 col-md-12 col-lg-12">Servidor</dt>
                                        <dd class="col-sm-12 col-md-12 col-lg-12">{{ $host->server }}</dd>
                                    </a>
                                </div>
                            @endisset
                            </dl>
                        </div>
                    </section>
                    @isset($host->obs)
                        <hr class="my-4">
                        <div>
                            <pre>{{ $host->obs }}</pre>
                        </div>
                    @endisset
                </div>
                    <div class="card-footer">
                        <a class="btn btn-primary btn-inline float-right" href="{{ route('subredes.show', $host->id_sub) }}">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
    <script src="{{asset('./js/clipboard.min.js')}}"></script>
    <script>var clipboard = new ClipboardJS('#copy')</script>
@endsection