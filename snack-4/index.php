<?php


class Person {
    public $age;

    public function age($newAge) {
        if (!is_int($newAge)) {
            throw new exception("L'età deve essere un numero intero");
        }

        $this->age = $newAge;
    }

    public function getAge() {
        return $this->age;
    }
}

$person = new Person ();

try {
    $person->age(31.5);
    echo "Età: " . $person->getAge();
} catch (exception $e) {
    echo $e->getMessage();
}
?>