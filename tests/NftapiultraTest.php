<?php
/**
 * Tests for NFTAPIUltra
 */

use PHPUnit\Framework\TestCase;
use Nftapiultra\Nftapiultra;

class NftapiultraTest extends TestCase {
    private Nftapiultra $instance;

    protected function setUp(): void {
        $this->instance = new Nftapiultra(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftapiultra::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
