<?php
declare(strict_types=1);

include_once("../Enclos/Enclo.php");

class Employer
{
    protected int $id;
    protected string $name;
    protected int $age;
    protected string $gender;

    public function __construct(string $name, int $age, string $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function __toString(): string {
        $string= 'Employee name : ' . $this->getName() . ' <br> ';
        $string.= 'Age : ' . $this->getAge() . ' <br> ';
        $string.= 'Gender : ' . $this->getGender() . ' <br> ';                
        $string.='<br>';
        return $string;     
        
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setId(?int $newId): self
    {
        $this->id = $newId;

        return $this;
    }

    public function setName($newName):self
    {
        $this->name = $newName;

        return $this;
    }

    public function setAge($newAge):self
    {
        $this->age = $newAge;

        return $this;
    }

    public function setGender($newGender):self
    {
        $this->gender = $newGender;

        return $this;
    }

    public function checkEnclosure(Enclo $enclosure)
    {
        echo $enclosure;
        //si il y a des animaux on affiche aussi leurs caractéristiques
        if(count($enclosure->getAnimals())!=0){
            $enclosure->displayAnimalCharacteristics();
        }
    }

    public function cleaning(Enclo $enclosure):void
    {       
        $enclosure->cleaning();    
    }

    public function toFeed(Enclo $enclosure): bool
    {
        $someoneSleepy = false;
        foreach($enclosure->getAnimals() as $animal){
            if($animal->getIsSleeping() == false){
                $animal->setIsHungry(false);
            }else{
                $someoneSleepy = true;
            }
        }
        return $someoneSleepy;
    }

    public function addToEnclosure(Enclo $enclosure, Animal $animal):void
    {
        if(count($enclosure->getAnimals()) < $enclosure->getLength()){
            $enclosure->addAnimal($animal);
        } else {
            echo 'the enclosure is already full <br><br>';
        }
    }

    public function removeFromEnclosure(Enclo $enclosure, Animal $animal):void
    {
        $enclosure->removeAnimal($animal);
    }

    public function moveAnimal(Enclo $enclosureFrom, Animal $animal, Enclo $enclosureTo):void
    {
        $this->removeFromEnclosure($enclosureFrom, $animal);
        $this->addToEnclosure($enclosureTo, $animal);
    }


}