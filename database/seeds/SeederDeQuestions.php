<?php

use Illuminate\Database\Seeder;

class SeederDeQuestions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $preguntaUno = DB::table("questions")->insert(
          [
            "id" => 1,
            "body" => "¿Quién es el creador de Los Simpsons?",
          ]
        );
        $preguntaDos = DB::table("questions")->insert(
          [
            "id" => 2,
            "body" => "¿En qué año se estreno la serie?",
          ]
        );
        $preguntaTres = DB::table("questions")->insert(
          [
            "id" => 3,
            "body" => "¿Cómo murió la mujer de Ned Flanders?",
          ]
        );
        $preguntaCuatro = DB::table("questions")->insert(
          [
            "id" => 4,
            "body" => "¿A quién llama siempre Bart para hacerle bromas telefónicas?",
          ]
        );
        $preguntaCinco = DB::table("questions")->insert(
          [
            "id" => 5,
            "body" => "¿Con qué personajes ha tenido romances Edna Krabappel?",
          ]
        );
        $preguntaSeis = DB::table("questions")->insert(
          [
            "id" => 6,
            "body" => "¿Qué record batió Apu?",
          ]
        );
        $preguntaSiete = DB::table("questions")->insert(
          [
            "id" => 7,
            "body" => "¿Que sabor tiene El Hombre Topo según Homero?",
          ]
        );
        $preguntaOcho = DB::table("questions")->insert(
          [
            "id" => 8,
            "body" => "¿Por qué desapareció el personaje de Troy McClure de la serie?",
          ]
        );
        $preguntaNueve = DB::table("questions")->insert(
          [
            "id" => 9,
            "body" => "¿Cómo se llama el equipo de bolos de Ned Flanders?",
          ]
        );$preguntaDiez = DB::table("questions")->insert(
          [
            "id" => 10,
            "body" => "¿Qué color de tintura usa Marge para el cabello?",
          ]
        );
        $preguntaOnce = DB::table("questions")->insert(
          [
            "id" => 11,
            "body" => "¿Cómo se llama el hámster del colegio de Springfield?",
          ]
        );
        $preguntaDoce = DB::table("questions")->insert(
          [
            "id" => 12,
            "body" => "¿Qué presidente de los Estados Unidos vivió en la Avenida Siempreviva?",
          ]
        );
        $preguntaTrece = DB::table("questions")->insert(
          [
            "id" => 13,
            "body" => "¿Cuál de estos personajes de Los Simpsons no ha muerto?",
          ]
        );
        $preguntaCatorce = DB::table("questions")->insert(
          [
            "id" => 14,
            "body" => "¿Quién es el ganador del festival de cine de Springfield?",
          ]
        );
        $preguntaQuince = DB::table("questions")->insert(
          [
            "id" => 15,
            "body" => "¿Quién es el peor enemigo de McBain?",
          ]
        );

    }
}
