<?php
declare(strict_types=1);
include_once('../Animaaux/Animal.php');

abstract class Enclo
{
    protected ?int $id = null;
    protected int $max_number = 6;
    protected string $cleaning_level = "clean";
    protected string $name;
    protected string $actual_specie = "none";
    protected array $animals;
    
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->animals = [];
    }

    public function __toString(): string {
        $string= 'Enclosure name : ' . $this->getName() . ' <br> ';
        $string.= 'Actual specie : ' . $this->getActualSpecie() . ' <br> ';
        $string.= 'Cleanliness : ' . $this->getCleanliness() . ' <br> ';
        $string.= 'Animals : <br>';
        foreach($this->animals as $animal){
            $string.= ' * '.$animal->getSpecie().'<br>';
        }
                
        $string.='<br>';
        return $string;     
        
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getMaxNumber(): int
    {
        return $this->max_number;
    }

    public function getActualSpecie(): string
    {
        return $this->actual_specie;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCleanliness(): string
    {
        return $this->cleaning_level;
    }

    public function getAnimals():array
    {
        return $this->animals;
    }

    public function getAnimalById(int $id): ?Animal
    {
        foreach($this->getAnimals() as $animal){
            if($animal->getId() == $id){
                return $animal;
            }
        }
        return null;
    }

    public function removeAnimal(Animal $animal):void{
        if(in_array($animal, $this->animals)){
            unset($this->animals[array_search($animal, $this->animals)]);
            $this->animals = array_values($this->animals);

            if (empty($this->animals)) {
                $this->setActualSpecie('none');
            }
        }
        
    }

    public function displayAnimalCharacteristics():void{
        
        echo 'Characteristics of the animals in the '.get_class($this).' '. $this->getName() .' : <br><br>';
        foreach($this->animals as $animal){
            echo $animal.'<br><br>';
        }
        
    }

    public function cleaning():void{
        
        $this->setCleanliness('clean');

        if(get_class($this) == 'Aviary'){
            $this->setTopCleanliness('clean');
        }
        
        
    }

}