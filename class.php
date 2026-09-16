<?php

declare(strict_types=1);

abstract class Categoria
{
    public function __construct(
        protected string $nome,
        protected string $descrizione = ""
    ) {}

    abstract public function getInfo(): string;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDescrizione(): string
    {
        return $this->descrizione;
    }
}

class Attualita extends Categoria
{
    public function __construct(
        string $descrizione = "",
        private bool $inPrimaPagina = false
    ) {
        parent::__construct("Attualità", $descrizione);
    }

    public function getInfo(): string
    {
        $stato = $this->inPrimaPagina ? "Sì" : "No";
        return "Sezione {$this->nome}: {$this->descrizione} (In prima pagina: {$stato})";
    }

    public function isInPrimaPagina(): bool
    {
        return $this->inPrimaPagina;
    }
}

class Sport extends Categoria
{
    public function __construct(
        string $descrizione = "",
        private string $disciplina = "Calcio"
    ) {
        parent::__construct("Sport", $descrizione);
    }

    public function getInfo(): string
    {
        return "Sezione {$this->nome} - {$this->disciplina}: {$this->descrizione}";
    }

    public function getDisciplina(): string
    {
        return $this->disciplina;
    }
}

class Gossip extends Categoria
{
    public function __construct(
        string $descrizione = "",
        private int $livelloScoop = 1
    ) {
        parent::__construct("Gossip", $descrizione);
    }

    public function getInfo(): string
    {
        return "Gossip (Livello scoop {$this->livelloScoop}/5): {$this->descrizione}";
    }

    public function getLivelloScoop(): int
    {
        return $this->livelloScoop;
    }
}

class Storia extends Categoria
{
    public function __construct(
        string $descrizione = "",
        private string $epoca = "Contemporanea"
    ) {
        parent::__construct("Storia", $descrizione);
    }

    public function getInfo(): string
    {
        return "Storia ({$this->epoca}): {$this->descrizione}";
    }

    public function getEpoca(): string
    {
        return $this->epoca;
    }
}

// Un piccolo test per verificare che tutto funzioni correttamente:
$sezioni = [
    new Attualita("Notizie dall'Italia e dal mondo", true),
    new Sport("Risultati e interviste", "Tennis"),
    new Gossip("Ultimissime sulle celebrità", 4),
    new Storia("Approfondimenti sul Novecento", "XX Secolo")
];

foreach ($sezioni as $sezione) {
    echo $sezione->getInfo() . "\n";
}