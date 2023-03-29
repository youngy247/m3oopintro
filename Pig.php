<?php

// A class is the specification/description/blueprint of objects.
// It's a kind of data type.

class Pig
{
    // Properties
    private string $name;
    public float $weight;
    public string $colour;

    // Methods
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getColour(): string
    {
        return $this->colour;
    }

    /**
     * @param string $colour
     */
    public function setColour(string $colour): void
    {
        $this->colour = $colour;
    }



    public function speak(): string
    {
        return 'Oink';
    }

    public function wagTail(): string
    {
        return 'Wag, wag!';
    }
    public function eat(string $food): string {
        return 'Mmmm. I love tasty ' . $food;
    }
}


// -> is called the object operator or object accessor.



