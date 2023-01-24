<?php

//creazione classe movie

class Genere {
    public $genere;

    public function __construct($genere){
    
        $this -> genere = $genere;

    }

    public function getGenere() {
        return $this -> genere;
    }
}


class Movie {

    //dichiarazione variabili

    public $title;
    public $vote;
    public $language;
    public $desc;


    //richiamo la classe genere all'interno della classe movie

    public Array $generes;
    //metodo costruttore

    public function __construct($title, $vote, $language, $desc, array $generes){
        
        $this -> title = $title;
        $this -> vote = $vote;
        $this -> language = $language;
        $this -> desc = $desc;
        $this -> generes = $generes;

    }

    //metodo che restituisce tutte le info del film 


    //metodo che restituisce la descrizione del film
    public function getGenere(){

        $str = "";
        foreach ($this -> generes as $genere) {

            $str .= $genere -> getGenere() . "<br>";
        }
        return $str;
    }

    public function getInfoMovie(){

        return $this -> title
        . " | VOTO: " . $this -> vote 
        . " (" . $this -> language . ")" . "GENERI : " . $this -> getGenere();

    }
}

class Libreria {
    public Array $movie;

    public function __construct( array $movie ){

        $this -> movie = $movie;

    }

    public function getMovie(){

        $str = "";
        foreach ($this -> movie as $movie) {

            $str .= $movie -> getInfoMovie() . "<br>";
        }
        return $str;
    }
}

$azione = new Genere("Azione");
$avventura = new Genere("Avventura");

$generi = [ $azione, $avventura ];

$ironman = new Movie("Ironman",9,"ENG","Supereroe appartenente all'universo cinematografico della Marvel!",$generi);
$superman = new Movie("Superman", 8, "ENG", "Film della DC COMICS",$generi);

$movies = [ $ironman, $superman ];

$library = new Libreria($movies);
echo $library -> getMovie();

