<?php

/**
 * Exercice 1
 */

//Définir la classe book ici

class Book
{
    protected $title;
    protected $author;
    protected $genre;
    protected $description;
    protected $dateInstanciation;


    public function __construct()
    {
        $this->dateInstanciation = date('d/m/Y à h:m:s');
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of genre
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of dateInstanciation
     */ 
    public function getDateInstanciation()
    {
        return $this->dateInstanciation;
    }

    /**
     * Set the value of dateInstanciation
     *
     * @return  self
     */ 
    public function setDateInstanciation($dateInstanciation)
    {
        $this->dateInstanciation = $dateInstanciation;

        return $this;
    }
}
