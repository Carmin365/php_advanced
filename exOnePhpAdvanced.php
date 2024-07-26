<?
interface Flying {
    public function to_fly();
}

trait SpecialAbility {
    public function specialAbility() {
        echo "Special ability activated!";
    }
}

class Bird implements Flying {
    use SpecialAbility;

    public function to_fly() {
        echo "I´m flying!";
    }
}

$bird = new Bird();
$bird->to_fly();
$bird->specialAbility();

?>