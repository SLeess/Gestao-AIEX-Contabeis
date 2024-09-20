<div style="display: inline-block">
    <a
        class="btn-floating waves-effect waves-light orange"
        href="#"
        data-toggle="modal" data-target="#editAluno{{ $aluno->id }}">
        <svg xmlns="http://www.w3.org/2000/svg" style="color: orange" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
        </svg>
        {{-- class="btn btn-outline-primary btn-sm me-2" --}}
    </a>

    <x-adminlte-modal theme="yellow" id="editAluno{{ $aluno->id }}" title="Editar Aluno: {{ $aluno->nome }}">
        <form method="post" action="{{ Route("aluno.update", $aluno->id) }}" id="{{ $aluno->id }}EditalunoForm" class="g-3 needs-validation">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="Matricula">Matricula</label>
                    <input type="text" name="matricula" class="form-control" id="{{ $aluno->id }}Editmatricula"
                        placeholder="Ex.: 100099999" maxlength="9" value="{{ $aluno->matricula }}">
                    <small id="{{ $aluno->id }}EditmatriculaHelp" class="form-text text-muted">Número de matrícula</small>
                    @error('matricula')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control @error('nome') is-invalid @enderror" id="{{ $aluno->id }}Editnome"
                        placeholder="Ex.: José da Silva Ribeiro" name="nome" maxlength="100" value="{{ $aluno->nome }}">
                    <small id="{{ $aluno->id }}EditnomeHelp" class="form-text text-muted">Nome Completo</small>
                    @error('nome')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control" id="{{ $aluno->id }}Editemail" aria-describedby="emailHelp"
                        placeholder="Ex.: example@email.com" maxlength="255" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" value="{{ $aluno->email }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" class="form-control" id="{{ $aluno->id }}telefone-input-edit"
                        placeholder="Ex.: (99) 99999-9999" required pattern="\(\d{2}\) \d{5}-\d{4}" maxlength="15" value="@php
                            // echo aplicarMascaraTelefones($aluno->telefone)
                            $numero = preg_replace('/\D/', '', $aluno->telefone);

                            // Aplica a máscara
                            if (strlen($numero) == 11) {
                                echo preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $numero);
                            } elseif (strlen($numero) == 10) {
                                echo preg_replace('/(\d{2})(\d{4})(\d{4})/', '($1) $2-$3', $numero);
                            } else {
                                echo $numero;
                            }@endphp"
                        oninput="this.value = aplicarMascaraTelefone(this.value);">
                    <small id="{{ $aluno->id }}EdittelefoneHelp" class="form-text text-muted">Número de telefone com DDD</small>
                    @error('telefone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="semestre_ingresso">Semestre de Ingresso</label>
                    <select name="semestre_ingresso" class="form-control">
                        @for ($i = date('Y'); $i >= 1989; $i--)
                            <option value="{{ $i.'-2'}}" @if($i.'-2' === $aluno->semestre_ingresso) selected @endif>{{ $i. ' - Semestre 2' }}</option>
                            <option value="{{ $i.'-1'}}" @if($i.'-1' === $aluno->semestre_ingresso) selected @endif>{{ $i. ' - Semestre 1' }}</option>
                        @endfor
                    </select>
                    <small id="{{ $aluno->id }}Editsemestre_ingressoHelp" class="form-text text-muted">Escolha o semestre de ingresso</small>
                    @error('semestre_ingresso')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <input type="hidden" name="user_id" value="" id="{{ $aluno->id }}Edituser_id" aria-describedby="userHelp">
            <div class="col-12 d-flex justify-content-end mt-3">
                <button class="btn btn-warning text-center offset-4 mr-2" type="submit">Cadastrar Aluno</button>
                <x-adminlte-button style="background-color: #f77166;" theme="danger" label="Fechar" data-dismiss="modal"/>
            </div>
            <x-slot name="footerSlot">
                <small class="form-text text=muted">Atenção com a alteração dos campos.</small>
            </x-slot>
        </form>
    </x-adminlte-modal>
</div>
