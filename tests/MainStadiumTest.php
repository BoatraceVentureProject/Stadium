<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests;

use Boatrace\Venture\Project\MainStadium;
use Illuminate\Support\Collection;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @author shimomo
 */
class MainStadiumTest extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\MainStadium
     */
    protected MainStadium $stadium;

    /**
     * @var \Illuminate\Support\Collection
     */
    protected Collection $collection;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium ??= new MainStadium;

        $this->collection ??= collect(require __DIR__ . '/../config/stadiums.php');
    }

    /**
     * @return void
     */
    public function testNull(): void
    {
        $this->assertNull($this->stadium->null());
    }

    /**
     * @return void
     */
    public function testById(): void
    {
        foreach ($this->collection->pluck('id') as $index => $stadiumId) {
            $this->assertTrue($this->stadium->byId($stadiumId)->diff(
                $this->collection->get($index)
            )->isEmpty());
        }
    }

    /**
     * @return void
     */
    public function testByName(): void
    {
        foreach ($this->collection->pluck('name') as $index => $stadiumName) {
            $this->assertTrue($this->stadium->byName($stadiumName)->diff(
                $this->collection->get($index)
            )->isEmpty());
        }
    }

    /**
     * @return void
     */
    public function testByShortName(): void
    {
        foreach ($this->collection->pluck('short_name') as $index => $stadiumShortName) {
            $this->assertTrue($this->stadium->byShortName($stadiumShortName)->diff(
                $this->collection->get($index)
            )->isEmpty());
        }
    }

    /**
     * @return void
     */
    public function testByHiraganaName(): void
    {
        foreach ($this->collection->pluck('hiragana_name') as $index => $stadiumHiraganaName) {
            $this->assertTrue($this->stadium->byHiraganaName($stadiumHiraganaName)->diff(
                $this->collection->get($index)
            )->isEmpty());
        }
    }

    /**
     * @return void
     */
    public function testByKatakanaName(): void
    {
        foreach ($this->collection->pluck('katakana_name') as $index => $stadiumKatakanaName) {
            $this->assertTrue($this->stadium->byKatakanaName($stadiumKatakanaName)->diff(
                $this->collection->get($index)
            )->isEmpty());
        }
    }

    /**
     * @return void
     */
    public function testByEnglishName(): void
    {
        foreach ($this->collection->pluck('english_name') as $index => $stadiumEnglishName) {
            $this->assertTrue($this->stadium->byEnglishName($stadiumEnglishName)->diff(
                $this->collection->get($index)
            )->isEmpty());
        }
    }

    /**
     * @return void
     */
    public function testByUri(): void
    {
        foreach ($this->collection->pluck('uri') as $index => $stadiumUri) {
            $this->assertTrue($this->stadium->byUri($stadiumUri)->diff(
                $this->collection->get($index)
            )->isEmpty());
        }

        foreach ($this->collection->pluck('uri')->map(fn($uri) => parse_url($uri, PHP_URL_HOST)) as $index => $stadiumUri) {
            $this->assertTrue($this->stadium->byUri($stadiumUri)->diff(
                $this->collection->get($index)
            )->isEmpty());
        }
    }
}
