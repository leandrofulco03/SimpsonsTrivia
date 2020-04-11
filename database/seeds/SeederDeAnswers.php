<?php

use Illuminate\Database\Seeder;

class SeederDeAnswers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $respuestaUno = DB::table("answers")->insert(
      [
        "id" => 1,
        "answer" => "Seth MacFarlane",
        "is_correct" => false,
        "question_id" => 1
      ]
    );
    $respuestaDos = DB::table("answers")->insert(
    [
      "id" => 2,
      "answer" => "Matt Groening",
      "is_correct" => true,
      "question_id" => 1
    ]
    );
    $respuestaTres = DB::table("answers")->insert(
    [
      "id" => 3,
      "answer" => "Oj Simpson",
      "is_correct" => false,
      "question_id" => 1
    ]
    );
    $respuestaCuatro = DB::table("answers")->insert(
    [
      "id" => 4,
      "answer" => "Año 1992",
      "is_correct" => false,
      "question_id" => 2
    ]
    );
    $respuestaCinco = DB::table("answers")->insert(
    [
      "id" => 5,
      "answer" => "Año 1995",
      "is_correct" => false,
      "question_id" => 2
    ]
    );
    $respuestaSeis = DB::table("answers")->insert(
    [
      "id" => 6,
      "answer" => "Año 1989",
      "is_correct" => true,
      "question_id" => 2
    ]
    );
    $respuestaSiete = DB::table("answers")->insert(
    [
      "id" => 7,
      "answer" => "La asesina un actor secundario en un asalto a mano armada",
      "is_correct" => false,
      "question_id" => 3
    ]
    );
    $respuestaOcho = DB::table("answers")->insert(
    [
      "id" => 8,
      "answer" => "Maude sufre un accidente con un cañon de camisetas por culpa de Ned",
      "is_correct" => false,
      "question_id" => 3
    ]
    );
    $respuestaNueve = DB::table("answers")->insert(
    [
      "id" => 9,
      "answer" => "Maude sufre un accidente con un cañon de camisetas por culpa de Homero",
      "is_correct" => true,
      "question_id" => 3
    ]
    );
    $respuestaDiez = DB::table("answers")->insert(
    [
      "id" => 10,
      "answer" => "A Moe",
      "is_correct" => true,
      "question_id" => 4
    ]
    );
    $respuestaOnce = DB::table("answers")->insert(
    [
      "id" => 11,
      "answer" => "A Barney",
      "is_correct" => false,
      "question_id" => 4
    ]
    );
    $respuestaDoce = DB::table("answers")->insert(
    [
      "id" => 12,
      "answer" => "A Skinner",
      "is_correct" => false,
      "question_id" => 4
    ]
    );
    $respuestaTrece = DB::table("answers")->insert(
    [
      "id" => 13,
      "answer" => "Con Seymour Skinner",
      "is_correct" => false,
      "question_id" => 5
    ]
    );
    $respuestaCatorce = DB::table("answers")->insert(
    [
      "id" => 14,
      "answer" => "Con Seymour y Ned Flanders",
      "is_correct" => false,
      "question_id" => 5
    ]
    );
    $respuestaQuince = DB::table("answers")->insert(
    [
      "id" => 15,
      "answer" => "Con Seymour, Moe y Ned",
      "is_correct" => true,
      "question_id" => 5
    ]
    );
    $respuestaDieciseis = DB::table("answers")->insert(
    [
      "id" => 16,
      "answer" => "Batió el record de cervezas vendidas en un día (225)",
      "is_correct" => false,
      "question_id" => 6
    ]
    );
    $respuestaDiecisiete = DB::table("answers")->insert(
    [
      "id" => 17,
      "answer" => "Batió el record de tiempo en servicio en la tienda (112 horas consecutivas de trabajo)",
      "is_correct" => true,
      "question_id" => 6
    ]
    );
    $respuestaDieciocho = DB::table("answers")->insert(
    [
      "id" => 18,
      "answer" => "Batió el record de hijos (8 hijos)",
      "is_correct" => false,
      "question_id" => 6
    ]
    );
    $respuestaDiecinueve = DB::table("answers")->insert(
    [
      "id" => 19,
      "answer" => "A ajo",
      "is_correct" => false,
      "question_id" => 7
    ]
    );
    $respuestaVeinte = DB::table("answers")->insert(
    [
      "id" => 20,
      "answer" => "A palanqueta",
      "is_correct" => true,
      "question_id" => 7
    ]
    );
    $respuestaVeintiuno = DB::table("answers")->insert(
    [
      "id" => 21,
      "answer" => "A piel de cerdo",
      "is_correct" => false,
      "question_id" => 7
    ]
    );
    $respuestaVeintidos = DB::table("answers")->insert(
    [
      "id" => 22,
      "answer" => "Porque su actor de doblaje fue asesinado",
      "is_correct" => true,
      "question_id" => 8
    ]
    );
    $respuestaVeintitres = DB::table("answers")->insert(
    [
      "id" => 23,
      "answer" => "Porque pidió un aumento de sueldo",
      "is_correct" => false,
      "question_id" => 8
    ]
    );
    $respuestaVeinticuatro = DB::table("answers")->insert(
    [
      "id" => 24,
      "answer" => "Porque no convencia su personaje",
      "is_correct" => false,
      "question_id" => 8
    ]
    );
    $respuestaVeinticinco = DB::table("answers")->insert(
    [
      "id" => 25,
      "answer" => "Los Alegrías",
      "is_correct" => false,
      "question_id" => 9
    ]
    );
    $respuestaVeintiseis = DB::table("answers")->insert(
    [
      "id" => 26,
      "answer" => "Los Aleluyas",
      "is_correct" => true,
      "question_id" => 9
    ]
    );
    $respuestaVeintisiete = DB::table("answers")->insert(
    [
      "id" => 27,
      "answer" => "Los Iluminatis",
      "is_correct" => false,
      "question_id" => 9
    ]
    );
    $respuestaVeintiocho = DB::table("answers")->insert(
    [
      "id" => 28,
      "answer" => "Azul 74",
      "is_correct" => false,
      "question_id" => 10
    ]
    );
    $respuestaVeintinueve = DB::table("answers")->insert(
    [
      "id" => 29,
      "answer" => "Azul 54",
      "is_correct" => true,
      "question_id" => 10
    ]
    );
    $respuestaTreinta = DB::table("answers")->insert(
    [
      "id" => 30,
      "answer" => "Azul 64",
      "is_correct" => false,
      "question_id" => 10
    ]
    );
    $respuestaTreintaiuno = DB::table("answers")->insert(
    [
      "id" => 31,
      "answer" => "Colmillos",
      "is_correct" => false,
      "question_id" => 11
    ]
    );
    $respuestaTreintaidos = DB::table("answers")->insert(
    [
      "id" => 32,
      "answer" => "Muelitas",
      "is_correct" => false,
      "question_id" => 11
    ]
    );
    $respuestaTreintaitres = DB::table("answers")->insert(
    [
      "id" => 33,
      "answer" => "Dientecillos",
      "is_correct" => true,
      "question_id" => 11
    ]
    );
    $respuestaTreintaicuatro = DB::table("answers")->insert(
    [
      "id" => 34,
      "answer" => "George Bush",
      "is_correct" => true,
      "question_id" => 12
    ]
    );
    $respuestaTreintaicinco = DB::table("answers")->insert(
    [
      "id" => 35,
      "answer" => "Bill Clinton",
      "is_correct" => false,
      "question_id" => 12
    ]
    );
    $respuestaTreintaiseis = DB::table("answers")->insert(
    [
      "id" => 36,
      "answer" => "Ronald Reagan",
      "is_correct" => false,
      "question_id" => 12
    ]
    );
    $respuestaTreintaisiete = DB::table("answers")->insert(
    [
      "id" => 37,
      "answer" => "Disco Stu",
      "is_correct" => false,
      "question_id" => 13
    ]
    );
    $respuestaTreintaiocho = DB::table("answers")->insert(
    [
      "id" => 38,
      "answer" => "Encias Sangrantes Murphy",
      "is_correct" => false,
      "question_id" => 13
    ]
    );
    $respuestaTreintainueve = DB::table("answers")->insert(
    [
      "id" => 39,
      "answer" => "Dr Marvin Monroe",
      "is_correct" => true,
      "question_id" => 13
    ]
    );
    $respuestaCuarenta = DB::table("answers")->insert(
    [
      "id" => 40,
      "answer" => "Barney Gomez",
      "is_correct" => true,
      "question_id" => 14
    ]
    );
    $respuestaCuarentaiuno = DB::table("answers")->insert(
    [
      "id" => 41,
      "answer" => "Moe",
      "is_correct" => false,
      "question_id" => 14
    ]
    );
    $respuestaCuarentaidos = DB::table("answers")->insert(
    [
      "id" => 42,
      "answer" => "Juan Topo",
      "is_correct" => false,
      "question_id" => 14
    ]
    );
    $respuestaCuarentaitres = DB::table("answers")->insert(
    [
      "id" => 43,
      "answer" => "Cordoba",
      "is_correct" => false,
      "question_id" => 15
    ]
    );
    $respuestaCuarentaicuatro = DB::table("answers")->insert(
    [
      "id" => 44,
      "answer" => "Cordoba",
      "is_correct" => false,
      "question_id" => 15
    ]
    );
    $respuestaCuarentaicinco = DB::table("answers")->insert(
    [
      "id" => 45,
      "answer" => "Mendoza",
      "is_correct" => true,
      "question_id" => 15
    ]
    );

    }
}
