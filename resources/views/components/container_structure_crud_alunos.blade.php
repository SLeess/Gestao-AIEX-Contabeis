<div class="bg-green-500">
    <div class="container" >
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12 col-lg-12 rounded shadow m-60 mt-3" style="border-radius: 110px;">
                <div class="p-60">
                    {{-- <h2 class="col-12  text-green-400 rounded md:text-start text-center pt-1">Listagem de alunos</h2> --}}
                    <div class="container mt-4">
                        <div class="card shadow-sm">
                            <div class="card-header bg-light">
                                <div class="container">
                                    <div class="row">
                                        <h5 class="mb-0 col-12 col-sm-8 col-md-9 col-lg-9 col-xl-10 items-center" style="margin-top: 30px; font-family: 'Oswald', sans-serif; font-optical-sizing: auto; font-weight: 700; font-style: normal;">
                                            Listagem e Cadastro de Alunos
                                        </h5>
                                        <div id="configh5" class="col-xl-2 col-lg-3 col-sm-4 col-md-3 col-6 mt-36 col-end-auto">
                                            <h5 class="text-center justify-content-center justify-content-sm-end align-items-center px-1 mb-0" style="margin-top: 28px; font-family: math; font-size: 14px; background-color: rgba(172, 169, 169, 0.397); border-radius: 25px; color: #00000078;text-align: center;padding: 5px 0px 5px 0px;">
                                                {{ $contagem }} alunos cadastrados
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body m-2">
                               {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
