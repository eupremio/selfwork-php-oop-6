<?php class Category {
    public function getMyCategory(): string
    {
        return "Categoria";
    }
}

class News extends Category
{
    public function getMyCategory(): string
    {
        return "News";
    }
}

class Gossip extends Category
{
    public function getMyCategory(): string
    {
        return "Gossip";
    }
}

class Post
{
    private string $title;
    private Category $category;
    private string $tag;

    public function __construct(string $titolo, Category $categoria, string $tag)
    {
        $this->title = $titolo;
        $this->category = $categoria;
        $this->tag = $tag;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCategory(): string
    {
        return $this->category->getMyCategory();
    }

    public function getTag(): string
    {
        return $this->tag;
    }
}

$post = new Post("Titolo", new News(), "tag 1");

$post1 = new Post("Titolo 2", new Gossip(), "tag 2");

echo $post->getCategory();
echo $post1->getTitle();
