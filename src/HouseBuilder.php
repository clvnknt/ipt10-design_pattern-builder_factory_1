<?php

namespace App;

use App\Application;
use App\Director;
use App\HouseBuilder;
use App\HouseWithGardenBuilder;
use App\HouseWithGarageBuilder;
use App\HouseWithSwimmingPoolBuilder;
use App\HouseWithFancyStatuesBuilder;

interface HouseBuilder
{
    public function buildDoors(): void;
    public function buildWindows(): void;
    public function buildRoof(): void;
    public function buildFlooring(): void;
    public function buildFoundation(): void;
}
?>
