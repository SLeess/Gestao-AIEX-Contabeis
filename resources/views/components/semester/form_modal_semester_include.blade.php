<div>
    <x-adminlte-button id="semesterBtnConfig" class="mt-3 addSemester" label="+" data-toggle="modal" data-target="#addSemester"
    style="display: flex; justify-content: center; align-items: center;"/>
    <x-adminlte-modal theme="green" id="addSemester" class="addSemester col-12 " title="Inserir semestre" onpageshow="gridSystem();">
        {{-- style="    padding-right 15px;align-items: center;justify-content: center;" --}}
        <div class="modal-dialog-centered">
            <form method="post" action="{{ Route('semesters.store') }}" id="semesterForm" class="g-3 needs-validation">
                @csrf
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="IdentificadorModal">Semestre Letivo</label>
                            <input type="text" name="identificador" class="form-control" id="identificadorModal"
                                placeholder="Ex.: 2000-1 ou 2000-2" maxlength="6">
                            <small id="identificadorModalHelp" class="form-text text-muted">Informe o semestre</small>
                        {{-- @error('matricula')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>
                </div>
                <div class="mt-1 row">
                    <div class="col-12">
                        <button style="--tw-bg-opacity: 0.85; background-color: rgb(22 163 74 / var(--tw-bg-opacity));" class="m-auto text-center btn btn-primary d-flex" type="submit">+</button>
                    </div>
                </div>
            </form>
            <x-slot name="footerSlot">
                <small class="form-text text=muted">Atenção com os campos.</small>
            </x-slot>
        </div>
    </x-adminlte-modal>
</div>
