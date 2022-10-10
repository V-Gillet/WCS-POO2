<?php

class Car
{

    private int $nbWheels = 4;
    private int $currentSpeed = 0;
    private string $color;
    private int $nbSeats;
    private string $energyType;
    private int $energylevel = 100;


    public function __construct(string $color, int $nbSeats, string $energyType)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energyType = $energyType;
    }

    public function start()
    {
        return 'You started the car.';
    }

    public function accelerate(int $currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
        return 'You are at ' . $currentSpeed . 'km/h.';
    }

    public function brake(): string
    {

        $sentence = "";

        while ($this->currentSpeed > 0) {

            $this->currentSpeed--;

            echo 'Speed : ' . $this->currentSpeed . 'km/h' . '<br>';
        }

        return 'You stopped the car.';
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergyType(): string
    {
        return $this->energyType;
    }

    public function getEnergyLevel(): int
    {
        return $this->energylevel;
    }
}
