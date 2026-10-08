<?php

namespace Tests\Unit;

use App\Models\Position;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class PositionModelTest extends TestCase
{
    #[Test]
    public function it_can_resolve_position_model(): void
    {
        $this->assertInstanceOf(Position::class, new Position());
    }
}
