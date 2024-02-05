<?php

class Prodotto {
    public $id_prodotto;
    public $categoria;
    public $nome;
    public $prezzo;
    public $immagine; 
    public $tipo_articolo;

    public function __construct($id_prodotto, $categoria, $nome, $prezzo, $immagine, $tipo_articolo) {
        $this->id_prodotto = $id_prodotto;
        $this->categoria = $categoria;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->tipo_articolo = $tipo_articolo;
    }

    public function stampaCard() {
        echo '<div class="card">';
        echo '<img src="' . $this->immagine . '" alt="'. '">';
        echo '<h3>' . $this->nome . '</h3>';
        echo '<p>Categoria: ' . $this->categoria . '</p>';
        echo '<p class="prezzo">Prezzo: $' . $this->prezzo . '</p>';
        echo '<p>Tipo: ' . $this->tipo_articolo . '</p>';
        echo '</div>';
    }
}

class ProdottoCani extends Prodotto {
    private $taglia;

    public function __construct($id_prodotto, $categoria, $nome, $prezzo, $immagine, $tipo_articolo, $taglia) {
        parent::__construct($id_prodotto, $categoria, $nome, $prezzo, $immagine, $tipo_articolo);
        $this->taglia = $taglia;
    }

    public function getTaglia() {
        return $this->taglia;
    }

    public function stampaCard() {
        parent::stampaCard();
        echo '<p class="taglia">Taglia: ' . $this->taglia . '</p>';
    }
}

class ProdottoGatti extends Prodotto {
    private $taglia;

    public function __construct($id_prodotto, $categoria, $nome, $prezzo, $immagine, $tipo_articolo, $taglia) {
        parent::__construct($id_prodotto, $categoria, $nome, $prezzo, $immagine, $tipo_articolo);
        $this->taglia = $taglia;
    }

    public function getTaglia() {
        return $this->taglia;
    }

    public function stampaCard() {
        parent::stampaCard();
        echo '<p class="taglia">Taglia: ' . $this->taglia . '</p>';
    }
}

// prodotti
// immagini inesistenti ma possibili
$prodotti_cani = [
    new ProdottoCani(1, "Cani", "Croccantini per Cani", 20.99, "immagine_cibo_cani1.jpg", "Cibo", "Media"),
    new ProdottoCani(2, "Cani", "Snack per Cani", 5.99, "immagine_cibo_cani2.jpg", "Cibo", "Piccola"),
    new ProdottoCani(3, "Cani", "Palla da Gioco per Cani", 12.99, "immagine_gioco_cani1.jpg", "Gioco", "Piccola"),
    new ProdottoCani(4, "Cani", "Letto Ortopedico per Cani", 49.99, "immagine_cuccia_cani1.jpg", "Cuccia", "Grande"),
    new ProdottoCani(5, "Cani", "Osso da Masticare", 8.99, "immagine_gioco_cani2.jpg", "Gioco", "Grande"),
    new ProdottoCani(6, "Cani", "Collare in Pelle", 15.99, "immagine_accessorio_cani1.jpg", "Accessorio", "Grande"),
    
];

$prodotti_gatti = [
    new ProdottoGatti(7, "Gatti", "Cibo Secco per Gatti", 18.99, "immagine_cibo_gatti1.jpg", "Cibo", "Adulto"),
    new ProdottoGatti(8, "Gatti", "Giocattolo a Piume per Gatti", 7.99, "immagine_gioco_gatti1.jpg", "Gioco", "Piccola"),
    new ProdottoGatti(9, "Gatti", "Cuccia Morbida per Gatti", 32.99, "immagine_cuccia_gatti1.jpg", "Cuccia", "Media"),
    new ProdottoGatti(10, "Gatti", "Snack per Gatti", 3.99, "immagine_cibo_gatti2.jpg", "Cibo", "Adulto"),
    new ProdottoGatti(11, "Gatti", "Giostra Interattiva", 19.99, "immagine_gioco_gatti2.jpg", "Gioco", "Piccola"),
    new ProdottoGatti(12, "Gatti", "Collare Elegante", 12.99, "immagine_accessorio_gatti1.jpg", "Accessorio", "PIccola"),
    
];


