<?php
// OOP examples - corrected and runnable
echo "<strong>OOP examples</strong><br>\n";

// Basic class with constructor property promotion (PHP 8+)
class Person {
  public function __construct(public string $firstName, public string $lastName) {}
  public function getFullName(): string {
    return $this->firstName . ' ' . $this->lastName;
  }
  public static function create(...$params): self {
    return new self(...$params);
  }
}

$person = new Person('Alice', 'Smith');
echo "Person: " . htmlspecialchars($person->getFullName()) . "<br>\n";

// Using the static factory
$person2 = Person::create('Mike', 'Taylor');
echo "Person (factory): " . htmlspecialchars($person2->getFullName()) . "<br>\n";

// Getter/Setter example with validation
class PersonWithName {
  private string $name = '';
  public function setName($name): void {
    if (!is_string($name)) {
      throw new InvalidArgumentException('$name must be a string!');
    }
    $this->name = $name;
  }
  public function getName(): string {
    return $this->name;
  }
}
try {
  $p = new PersonWithName();
  $p->setName('Charlie');
  echo "PersonWithName: " . htmlspecialchars($p->getName()) . "<br>\n";
} catch (Exception $e) {
  echo 'Error: ' . htmlspecialchars($e->getMessage()) . "<br>\n";
}

// Static method and constructor calling static
class Greeting {
  public static function welcome(): void {
    echo "Hello World!<br>\n";
  }
  public function __construct() {
    static::welcome();
  }
}
Greeting::welcome();
new Greeting();

// Static constant
class Connection {
  public const MAX_USER = 100;
}
echo 'Connection::MAX_USER = ' . Connection::MAX_USER . "<br>\n";

// Inheritance and overriding
class Customer extends Person {
  public function name(): string {
    return parent::getFullName() . ' (customer)';
  }
}
$cust = new Customer('Dana', 'Jones');
echo 'Customer: ' . htmlspecialchars($cust->name()) . "<br>\n";

// self::example inside a method
class SelfDemo {
  public static function welcome(): void {
    echo "SelfDemo::welcome called<br>\n";
  }
  public function callSelf(): void {
    self::welcome();
  }
}
$sd = new SelfDemo();
$sd->callSelf();

// Interface and implementation
interface Animal {
  public function makeSound(): void;
}
class Cat implements Animal {
  public function makeSound(): void {
    echo "Meow<br>\n";
  }
}
$animal = new Cat();
$animal->makeSound();

// Trait (mix-in)
trait HelloWorld {
  public function sayHello(): void {
  echo "Hello World from trait!<br>\n";
  }
}

class Greetings {
  use HelloWorld;
}
$object = new Greetings();
$object->sayHello();

?>