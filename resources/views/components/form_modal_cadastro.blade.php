<div>
    <x-adminlte-button id="addAlunoBtn" label="+" data-toggle="modal" data-target="#addAluno"/>
    <x-adminlte-modal theme="green" id="addAluno" title="Novo Aluno">
        <form method="post" action="{{ Route("aluno.store") }}" id="alunoForm" class="g-3 needs-validation">
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="Matricula">Matricula</label>
                    <input type="text" name="matricula" class="form-control" id="matricula"
                        placeholder="Ex.: 100099999" maxlength="9">
                    <small id="matriculaHelp" class="form-text text-muted">Número de matrícula</small>
                    @error('matricula')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome"
                        placeholder="Ex.: José da Silva Ribeiro" name="nome" maxlength="100">
                    <small id="nomeHelp" class="form-text text-muted">Nome Completo</small>
                    @error('nome')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"
                        placeholder="Ex.: example@email.com" maxlength="255" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" class="form-control" id="telefone"
                        placeholder="Ex.: (99) 99999-9999" required pattern="\(\d{2}\) \d{5}-\d{4}" maxlength="15">
                    <small id="telefoneHelp" class="form-text text-muted">Número de telefone com DDD</small>
                    @error('telefone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="semestre_ingresso">Semestre de Ingresso</label>
                    <select name="semestre_ingresso" class="form-control">
                        @for ($i = date('Y'); $i >= 1989; $i--)
                            <option value="{{ $i.'-2'}}">{{ $i. ' - Semestre 2' }}</option>
                            <option value="{{ $i.'-1'}}">{{ $i. ' - Semestre 1' }}</option>
                        @endfor
                    </select>
                    <small id="semestre_ingressoHelp" class="form-text text-muted">Escolha o semestre de ingresso</small>
                    @error('semestre_ingresso')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <input type="hidden" name="user_id" value="" id="user_id" aria-describedby="userHelp">
            <div class="col-12 d-flex justify-content-end mt-3">
                <button style="--tw-bg-opacity: 0.85; background-color: rgb(22 163 74 / var(--tw-bg-opacity));" class="btn btn-primary text-center offset-4 mr-2" type="submit">Cadastrar Aluno</button>
                <x-adminlte-button style="background-color: #f77166;" theme="danger" label="Fechar" data-dismiss="modal"/>
            </div>
            <x-slot name="footerSlot">
                <small class="form-text text=muted">Atenção com os campos.</small>
            </x-slot>
        </form>
    </x-adminlte-modal>
</div>
