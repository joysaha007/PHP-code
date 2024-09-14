<!-- **Task 4: Polymorphism**
Build a set of animal classes that demonstrate polymorphism by overriding a method for
making sounds. -->

<?php
class Animal{
    public function MakeSound(){
        return "Some generic sound";
    }
}
class Cat extends Animal{
    public function MakeSound(){
        return "Meow";
    }
}
class Dog extends Animal{
    public function MakeSound(){
        return "Bark";
    }
}
function describe(Animal $animal){
    echo "Animal sound :" . $animal->MakeSound() . "\n";
}
$cat=new Cat();
$dog=new Dog();
$other=new Animal();

describe($cat);
describe($dog);
describe($other);
?>