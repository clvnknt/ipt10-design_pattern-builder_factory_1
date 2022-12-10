<?php

namespace App;

use App\Application;
use App\Director;
use App\HouseBuilder;
use App\HouseWithGardenBuilder;
use App\HouseWithGarageBuilder;
use App\HouseWithSwimmingPoolBuilder;
use App\HouseWithFancyStatuesBuilder;

class House implements HouseBuilder
{
    private $property;
    private $type;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->property = new Property();
        $this->type = new Type();
    }

    public function properties(): void
    {
        $this->property->parts[] = "Doors";
        $this->property->parts[] = "Windows";
        $this->property->parts[] = "Walls";
        $this->property->parts[] = "Roof";
        $this->property->parts[] = "Foundation";
    }

    public function types(): void
    {
        $this->type->houses[] = "HouseWithGarden";
        $this->type->houses[] = "HouseWithGarage";
        $this->type->houses[] = "HouseWithSwimmingPool";
        $this->type->houses[] = "HouseWithFancyStatue";
    }

    public function getResult(): Property
    {
        $result = $this->property;
        $this->reset();

        return $result;
    }
}

class Property
{
    public $parts = [];

    public function listProperties(): void
    {
        echo "House Properties: " . implode(', ', $this->parts) . "\n\n";
    }
}

class HouseType
{
    public $parts = [];

    public function listProperties(): void
    {
        echo "House Properties: " . implode(', ', $this->parts) . "\n\n";
    }
}


