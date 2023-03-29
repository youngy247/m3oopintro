<?php

// A class is the specification/description/blueprint of objects.
// It's a kind of data type.

class Pig
{
    // Properties
    public string $name;
    public float $weight;
    public string $colour;

    // Methods
    public function speak(): string
    {
        return 'Oink';
    }

    public function wagTail(): string
    {
        return 'Wag, wag!';
    }
}


