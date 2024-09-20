<?php
// Mendefinisikan interface
interface SoundMaker {
    public function makeSound();
}
?>

<?php
// Kelas dasar Animal yang mengimplementasikan interface SoundMaker
class Animal implements SoundMaker {
    public function makeSound() {
        return "Some generic animal sound";
    }
}
?>

<?php
// Kelas turunan yang mengoverride metode makeSound
class Dog extends Animal {
    public function makeSound() {
        return "Bark";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow";
    }
}

class Cow extends Animal {
    public function makeSound() {
        return "Moo";
    }
}
?>

<?php
// Fungsi yang menerima parameter dari tipe SoundMaker dan mencetak suara
function printSound(SoundMaker $soundMaker) {
    echo $soundMaker->makeSound() . "\n";
}

// Membuat instance dari kelas turunan
$dog = new Dog();
$cat = new Cat();
$cow = new Cow();

// Menampilkan suara masing-masing hewan
printSound($dog); // Output: Bark
printSound($cat); // Output: Meow
printSound($cow); // Output: Moo
?>
