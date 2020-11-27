<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\MatchingController;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class MatchingControllerTest extends TestCase
{
    use DatabaseTransactions;
    private $controller;
    public function setUp(): void
    {
        parent::setUp();
        $this->controller = \App::make(MatchingController::class);
    }
    /**
     * 正しくマッチングできた場合
     *
     * @param string $name
     * @param string $sex
     * @param string $age
     * @param string $expectedSex
     * @param string $expectedAge
     *
     * @return void
     * @dataProvider matchingWhenMatched
     */
    public function testMatchingWhenMatched(string $name, string $sex, int $age, string $expectedSex, array $expectedAge) : void
    {
        factory(\App\Member::class, 10)->create();
        $results = $this->controller->matching($name, $sex, $age);
        $this->assertDatabaseHas('members', [
            'name' => $name,
            'sex' => $sex,
            'age' => $age
        ]);
        foreach ($results as $result) {
            $this->assertSame($expectedSex, $result['sex']);
            $this->assertGreaterThanOrEqual($expectedAge[0], $result['age']);
            $this->assertLessThanOrEqual($expectedAge[1], $result['age']);
        }
    }



}
