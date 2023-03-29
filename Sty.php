<?php

require_once 'Pig.php';

class Sty
{
    private array $pigs;

    /**
     * @return array
     */
    public function getPigs(): array
    {
        return $this->pigs;
    }

    public function getPig(int $pigIndex): Pig
    {
        return $this->pigs[$pigIndex];
    }

    /**
     * @param Pig $pig
     */
    public function addPig(Pig $pig): void
    {
        $this->pigs[] = $pig;
    }

    public function addPigs(array $pigs): void
    {
        $this->pigs = array_merge($this->pigs, $pigs);
    }
}