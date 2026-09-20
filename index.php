<?php

require_once "class.php";

class Post
{
    private string $titolo;
    private Categoria $categoria;
    private string $tag;

    public function __construct(
        string $titolo,
        Categoria $categoria,
        string $tag
    ) {
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }

    public function getTitolo(): string
    {
        return $this->titolo;
    }

    public function getCategoria(): string
    {
        return $this->categoria->getCategoria();
    }

    public function getTag(): string
    {
        return $this->tag;
    }

    public function mostraArticolo(): void
    {
        echo "Titolo: " . $this->titolo . "<br>";
        echo "Categoria: " . $this->getCategoria() . "<br>";
        echo "Tag: " . $this->tag . "<br>";
    }
}

$post1 = new Post(
    "Le trazioni",
    new Sport(),
    "calisthenics"
);

$post2 = new Post(
    "Le notizie del giorno",
    new Attualita(),
    "news"
);

$post3 = new Post(
    "Le curiosità dei personaggi famosi",
    new Gossip(),
    "celebrità"
);

$post1->mostraArticolo();

echo "<hr>";

$post2->mostraArticolo();

echo "<hr>";

$post3->mostraArticolo();