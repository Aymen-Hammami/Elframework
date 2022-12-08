<?php
  #this is an example for a possible entity ,the same rules apply for other entities
  namespace App\Entity;

class Article {
  //define your attributes then write your getters and setters,obviously no setter for the id (id is immutable ).
  //Feel free to remove the exclamation point(required field)
  private ?int $id;
  private ?string $title;
  private ?string $description;
  private ?string $content;

  public function getId(): ?int {
    return $this->id;
  }

  public function getTitle(): ?string {
    return $this->title;
  }
  public function setTitle(?string $title): void {
    $this->title = $title;
  }

  public function getDescription(): ?string {
    return $this->description;
  }
  public function setDescription(?string $description): void {
    $this->description = $description;
  }

  public function getContent(): ?string {
    return $this->content;
  }
  public function setContent(?string $content): void {
    $this->content = $content;
  }

}

