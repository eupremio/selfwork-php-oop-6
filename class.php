<?php

class Categoria
{
    public function getCategoria(): string
    {
        return "Categoria";
    }
}

class Attualita extends Categoria
{
    public function getCategoria(): string
    {
        return "Attualita";
    }
}

class Sport extends Categoria
{
    public function getCategoria(): string
    {
        return "Sport";
    }
}

class Gossip extends Categoria
{
    public function getCategoria(): string
    {
        return "Gossip";
    }
}

class Storia extends Categoria
{
    public function getCategoria(): string
    {
        return "Storia";
    }
}