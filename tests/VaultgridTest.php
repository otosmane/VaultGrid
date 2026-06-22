<?php
/**
 * Tests for VaultGrid
 */

use PHPUnit\Framework\TestCase;
use Vaultgrid\Vaultgrid;

class VaultgridTest extends TestCase {
    private Vaultgrid $instance;

    protected function setUp(): void {
        $this->instance = new Vaultgrid(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Vaultgrid::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
