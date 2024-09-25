<div class="bg-green-500">
    <div class="container" >
        <div class="row">
            <div class="mt-3 rounded shadow col-md-12 col-sm-12 col-12 col-lg-12 m-60" style="border-radius: 110px;">
                <div class="p-60">
                    {{-- <h2 class="pt-1 text-center text-green-400 rounded col-12 md:text-start">Listagem de alunos</h2> --}}
                    <div class="container mt-4">
                        <div class="shadow-sm card">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
