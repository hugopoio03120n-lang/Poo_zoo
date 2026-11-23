<?php
declare(strict_types=1);

abstract class Animal
{
    protected int $id;
    protected string $specie;
    protected float $size = 0.0;
    protected int $age = 0;
    protected float $weight = 0.0;
    protected ?int $enclosure_id;
    protected bool $is_hungry = false;
    protected bool $is_sleeping = false;
    protected bool $is_sick = false;

    public function __construct(int $id, string $specie, float $weight, float $size, int $age)
    {
        $this->id = $id;
        $this->specie = $specie;
        $this->weight = $weight;
        $this->height = $height;
        $this->age = $age;

    }

    public function __toString(): string {
        $is_hungry = $this->getIsHungry()== true ? 'yes' : 'no';
        $is_sleeping = $this->getIsSleeping()== true ? 'yes' : 'no'; 
        $is_sick = $this->getIsSick()== true ? 'yes' : 'no'; 

        $string= 'Specie : ' . $this->getSpecie() . ' <br> ';
        $string.= 'Weight : ' . $this->getWeight() . 'kg <br> ';
        $string.= 'Height : ' . $this->getHeight() . 'm <br> ';
        $string.= 'Age : ' . $this->getAge() . ' <br> ';
        $string.= 'IsHungry : ' . $is_hungry . ' <br> ';
        $string.= 'IsSleeping : ' . $is_sleeping . ' <br> ';
        $string.= 'IsSick : ' . $is_sick . ' <br> ';
        return $string;     
        //(Condition) ? (Statement1) : (Statement2);
    }
 
    public function getId(): int
    {
        return $this->id;
    }

    public function getEnclosureId(): ?int
    {
        return $this->enclosure_id;
    }

    public function getSpecie(): string
    {
        return $this->specie;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function getHeight(): float
    {
        return $this->size;
    }

    public function getAge(): int
    {
        return $this->age;
    }
    public function getIsHungry(): bool
    {
        return $this->is_hungry;
    }

    public function getIsSleeping(): bool
    {
        return $this->is_sleeping;
    }

    public function getIsSick(): bool
    {
        return $this->is_sick;
    }

    public function setId(int $newId): self
    {
        $this->id = $newId;

        return $this;
    }

    public function setEnclosureId(?int $newEnclosure_id): self
    {
        $this->enclosure_id = $newEnclosure_id;

        return $this;
    }

    public function setWeight($newWeight):self
    {
        $this->weight = $newWeight;

        return $this;
    }

    public function setHeight($newSize):self
    {
        $this->size = $newSize;

        return $this;
    }

    public function setAge($newAge):self
    {
        $this->age = $newAge;

        return $this;
    }

    public function setIsHungry($newIs_hungry):self
    {
        $this->is_hungry = $newIs_hungry;

        return $this;
    }

    public function setIsSleeping($newIs_sleeping):self
    {
        $this->is_sleeping = $newIs_sleeping;

        return $this;
    }

    public function setIsSick($newIs_sick):self
    {
        $this->is_sick = $newIs_sick;

        return $this;
    }

    public function eating(): bool
    {
        $this->setIsHungry(false);
        return true;
    }

    public function makeSound($sound): bool
    {
        echo $this->specie . ' : ' . $sound . '<br><br>';
        return true;
    }

    public function cure(): bool
    {
        $this->setIsSick(false);
        return true;
    }

    public function sleep(): bool
    {
        $this->setIsSleeping(true);
        return true;
    }

    public function wakeUp(): bool
    {
        $this->setIsSleeping(false);
        return true;
    }  

}
?>