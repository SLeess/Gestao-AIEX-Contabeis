<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("alunos")->insert([
            [
                'matricula' => '123456780',
                'nome' => 'João da Silva',
                'email' => 'joao1@example.com',
                'telefone' => '1234567890',
                'semestre_ingresso' => '202101',
            ],
            [
                'matricula' => '123456781',
                'nome' => 'Maria Oliveira',
                'email' => 'maria1@example.com',
                'telefone' => '0987654321',
                'semestre_ingresso' => '202102',
            ],
            [
                'matricula' => '123456782',
                'nome' => 'Carlos Pereira',
                'email' => 'carlos1@example.com',
                'telefone' => '1122334455',
                'semestre_ingresso' => '202103',
            ],
            [
                'matricula' => '123456783',
                'nome' => 'Ana Costa',
                'email' => 'ana1@example.com',
                'telefone' => '2233445566',
                'semestre_ingresso' => '202104',
            ],
            [
                'matricula' => '123456784',
                'nome' => 'Roberto Lima',
                'email' => 'roberto1@example.com',
                'telefone' => '3344556677',
                'semestre_ingresso' => '202105',
            ],
            [
                'matricula' => '123456785',
                'nome' => 'Patrícia Santos',
                'email' => 'patricia1@example.com',
                'telefone' => '4455667788',
                'semestre_ingresso' => '202106',
            ],
            [
                'matricula' => '123456786',
                'nome' => 'Marcos Almeida',
                'email' => 'marcos1@example.com',
                'telefone' => '5566778899',
                'semestre_ingresso' => '202107',
            ],
            [
                'matricula' => '123456787',
                'nome' => 'Juliana Rocha',
                'email' => 'juliana1@example.com',
                'telefone' => '6677889900',
                'semestre_ingresso' => '202108',
            ],
            [
                'matricula' => '123456788',
                'nome' => 'Fernando Martins',
                'email' => 'fernando1@example.com',
                'telefone' => '7788990011',
                'semestre_ingresso' => '202109',
            ],
            [
                'matricula' => '123456789',
                'nome' => 'Luana Ferreira',
                'email' => 'luana1@example.com',
                'telefone' => '8899001122',
                'semestre_ingresso' => '202110',
            ],
            [
                'matricula' => '123456790',
                'nome' => 'Renato Souza',
                'email' => 'renato1@example.com',
                'telefone' => '9900112233',
                'semestre_ingresso' => '202111',
            ],
            [
                'matricula' => '123456791',
                'nome' => 'Camila Lima',
                'email' => 'camila1@example.com',
                'telefone' => '1011121314',
                'semestre_ingresso' => '202112',
            ],
            [
                'matricula' => '123456792',
                'nome' => 'Tiago Almeida',
                'email' => 'tiago1@example.com',
                'telefone' => '1415161718',
                'semestre_ingresso' => '202201',
            ],
            [
                'matricula' => '123456793',
                'nome' => 'Fabiana Dias',
                'email' => 'fabiana1@example.com',
                'telefone' => '1819202122',
                'semestre_ingresso' => '202202',
            ],
            [
                'matricula' => '123456794',
                'nome' => 'Ricardo Oliveira',
                'email' => 'ricardo1@example.com',
                'telefone' => '2223242526',
                'semestre_ingresso' => '202203',
            ],
            [
                'matricula' => '123456795',
                'nome' => 'Tatiane Santos',
                'email' => 'tatiane1@example.com',
                'telefone' => '2627282930',
                'semestre_ingresso' => '202204',
            ],
            [
                'matricula' => '123456796',
                'nome' => 'Gustavo Rocha',
                'email' => 'gustavo1@example.com',
                'telefone' => '3031323334',
                'semestre_ingresso' => '202205',
            ],
            [
                'matricula' => '123456797',
                'nome' => 'Bruna Mendes',
                'email' => 'bruna1@example.com',
                'telefone' => '3435363738',
                'semestre_ingresso' => '202206',
            ],
            [
                'matricula' => '123456798',
                'nome' => 'Leandro Nascimento',
                'email' => 'leandro1@example.com',
                'telefone' => '3839404142',
                'semestre_ingresso' => '202207',
            ],
            [
                'matricula' => '123456799',
                'nome' => 'Isabela Teixeira',
                'email' => 'isabela1@example.com',
                'telefone' => '4243444546',
                'semestre_ingresso' => '202208',
            ],
            [
                'matricula' => '123456800',
                'nome' => 'Lucas Martins',
                'email' => 'lucas1@example.com',
                'telefone' => '4647484950',
                'semestre_ingresso' => '202209',
            ],
            [
                'matricula' => '123456801',
                'nome' => 'Mariana Costa',
                'email' => 'mariana1@example.com',
                'telefone' => '5051525354',
                'semestre_ingresso' => '202210',
            ],
            [
                'matricula' => '123456802',
                'nome' => 'Diego Almeida',
                'email' => 'diego1@example.com',
                'telefone' => '5455565758',
                'semestre_ingresso' => '202211',
            ],
            [
                'matricula' => '123456803',
                'nome' => 'Cíntia Souza',
                'email' => 'cintia1@example.com',
                'telefone' => '5859606162',
                'semestre_ingresso' => '202212',
            ],
            [
                'matricula' => '123456804',
                'nome' => 'Felipe Lima',
                'email' => 'felipe1@example.com',
                'telefone' => '6263646566',
                'semestre_ingresso' => '202301',
            ],
            [
                'matricula' => '123456805',
                'nome' => 'Vanessa Ferreira',
                'email' => 'vanessa1@example.com',
                'telefone' => '6667686970',
                'semestre_ingresso' => '202302',
            ],
            [
                'matricula' => '123456806',
                'nome' => 'Emanuel dos Santos',
                'email' => 'emanuel1@example.com',
                'telefone' => '7071727374',
                'semestre_ingresso' => '202303',
            ],
            [
                'matricula' => '123456807',
                'nome' => 'Raquel Almeida',
                'email' => 'raquel1@example.com',
                'telefone' => '7475767778',
                'semestre_ingresso' => '202304',
            ],
            [
                'matricula' => '123456808',
                'nome' => 'Paulo Rocha',
                'email' => 'paulo1@example.com',
                'telefone' => '7879808182',
                'semestre_ingresso' => '202305',
            ],
            [
                'matricula' => '123456809',
                'nome' => 'Letícia Mendes',
                'email' => 'leticia1@example.com',
                'telefone' => '8283848586',
                'semestre_ingresso' => '202306',
            ],
            [
                'matricula' => '123456810',
                'nome' => 'Eduardo Teixeira',
                'email' => 'eduardo1@example.com',
                'telefone' => '8687888990',
                'semestre_ingresso' => '202307',
            ],
            [
                'matricula' => '123456811',
                'nome' => 'Nathalia Costa',
                'email' => 'nathalia1@example.com',
                'telefone' => '9091929394',
                'semestre_ingresso' => '202308',
            ],
            [
                'matricula' => '123456812',
                'nome' => 'Guilherme Nascimento',
                'email' => 'guilherme1@example.com',
                'telefone' => '9495969798',
                'semestre_ingresso' => '202309',
            ],
        ]);
    }
}
