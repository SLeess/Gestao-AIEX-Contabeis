<div>
    <x-general.card_container>
        <div class="card-header bg-light">
            <div class="container">
                <div class="row">
                    <h5 class="items-center mb-0 col-12 col-sm-8 col-md-12 col-lg-8 col-xl-9" style="margin-top: 30px; font-family: 'Oswald', sans-serif; font-optical-sizing: auto; font-weight: 700; font-style: normal;">
                        Listagem e controle de Semestres letivos
                    </h5>
                    <div id="configh5" class="col-end-auto col-xl-3 col-lg-4 col-sm-5 col-md-6 col-6 mt-36">
                        <h5 class="px-1 mb-0 text-center justify-content-center justify-content-sm-end align-items-center" style="margin-top: 28px; font-family: math; font-size: 14px; background-color: rgba(172, 169, 169, 0.397); border-radius: 25px; color: #00000078;text-align: center;padding: 5px 0px 5px 0px;">
                            {{ $semestersCount }} semestres cadastrados
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-2 card-body">
            {{ $slot }}
        </div>
    </x-general.card_container>
</div>

