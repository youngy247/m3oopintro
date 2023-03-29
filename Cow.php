<?php

// A class is the specification/description/blueprint of objects.
// It's a kind of data type.

class Cow
{
    // Properties
    const Owner = "IO Academy";
    private string $name;
    private float $weight;
    private string $colour;
    private string $scientificName = 'Bos';

    /**
     * @return string
     */
    public function getScientificName(): string
    {
        return $this->scientificName;
    }

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
        return 'Moo';
    }

    public function wagTail(): string
    {
        return 'Swish!';
    }
    public function eat(string $food): string {
        return 'Mmmm. I love tasty ' . $food;
    }
}


// -> is called the object operator or object accessor.



