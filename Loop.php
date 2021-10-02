<?php

class Loop {
    private int $iteration;
    private int $count;
    private bool $reverse;

    public function __construct(int $iteration) {
        $this->iteration = $iteration;
        $this->reverse = false;
        $this->count = 0;
    }

    private function isMultiplied(int $number, int $multiply): bool {
        return $number % $multiply == 0;
    }

    private function isMultipliedBy3(int $number): bool {
        return $this->isMultiplied($number, 3);
    }

    private function isMultipliedBy5(int $number): bool {
        return $this->isMultiplied($number, 5);
    }

    private function isMultipliedBy3And5(int $number): bool {
        return $this->isMultipliedBy3($number) && $this->isMultipliedBy5($number);
    }

    public function printLoop()
    {
        $this->iteration;
        for ($i=1; $i <= $this->iteration; $i++) { 
            if ($this->count == 5) break;

            echo $i . '. ';

            if ($this->isMultipliedBy3And5($i)) {
                echo 'Pasar 20 Belanja Pangan';
                $this->count++;
                if ($this->count == 2) $this->reverse = true;
            } elseif ($this->isMultipliedBy3($i)) {
                echo $this->reverse ? 'Belanja Pangan' : 'Pasar 20';
            } elseif ($this->isMultipliedBy5($i)) {
                echo $this->reverse ? 'Pasar 20' : 'Belanja Pangan';
            }
            
            echo '<br>';
        }
    }
    
}