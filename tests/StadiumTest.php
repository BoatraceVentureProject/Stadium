<?php

declare(strict_types=1);

namespace BVP\Stadium\Tests;

use BVP\Stadium\Stadium;
use PHPUnit\Framework\TestCase;

/**
 * @author shimomo
 */
final class StadiumTest extends TestCase
{
    /**
     * @return void
     */
    public function testById(): void
    {
        $collection = Stadium::byId(12);
        $this->assertSame(12, $collection->get('id'));
        $this->assertSame('ボートレース住之江', $collection->get('name'));
        $this->assertSame('住之江', $collection->get('short_name'));
        $this->assertSame('ぼーとれーすすみのえ', $collection->get('hiragana_name'));
        $this->assertSame('ボートレーススミノエ', $collection->get('katakana_name'));
        $this->assertSame('suminoe', $collection->get('english_name'));
        $this->assertSame('https://www.boatrace-suminoe.jp/', $collection->get('url'));
    }

    /**
     * @return void
     */
    public function testByName(): void
    {
        $collection = Stadium::byName('ボートレース住之江');
        $this->assertSame(12, $collection->get('id'));
        $this->assertSame('ボートレース住之江', $collection->get('name'));
        $this->assertSame('住之江', $collection->get('short_name'));
        $this->assertSame('ぼーとれーすすみのえ', $collection->get('hiragana_name'));
        $this->assertSame('ボートレーススミノエ', $collection->get('katakana_name'));
        $this->assertSame('suminoe', $collection->get('english_name'));
        $this->assertSame('https://www.boatrace-suminoe.jp/', $collection->get('url'));
    }

    /**
     * @return void
     */
    public function testByShortName(): void
    {
        $collection = Stadium::byShortName('住之江');
        $this->assertSame(12, $collection->get('id'));
        $this->assertSame('ボートレース住之江', $collection->get('name'));
        $this->assertSame('住之江', $collection->get('short_name'));
        $this->assertSame('ぼーとれーすすみのえ', $collection->get('hiragana_name'));
        $this->assertSame('ボートレーススミノエ', $collection->get('katakana_name'));
        $this->assertSame('suminoe', $collection->get('english_name'));
        $this->assertSame('https://www.boatrace-suminoe.jp/', $collection->get('url'));
    }

    /**
     * @return void
     */
    public function testByHiraganaName(): void
    {
        $collection = Stadium::byHiraganaName('すみのえ');
        $this->assertSame(12, $collection->get('id'));
        $this->assertSame('ボートレース住之江', $collection->get('name'));
        $this->assertSame('住之江', $collection->get('short_name'));
        $this->assertSame('ぼーとれーすすみのえ', $collection->get('hiragana_name'));
        $this->assertSame('ボートレーススミノエ', $collection->get('katakana_name'));
        $this->assertSame('suminoe', $collection->get('english_name'));
        $this->assertSame('https://www.boatrace-suminoe.jp/', $collection->get('url'));
    }

    /**
     * @return void
     */
    public function testByKatakanaName(): void
    {
        $collection = Stadium::byKatakanaName('スミノエ');
        $this->assertSame(12, $collection->get('id'));
        $this->assertSame('ボートレース住之江', $collection->get('name'));
        $this->assertSame('住之江', $collection->get('short_name'));
        $this->assertSame('ぼーとれーすすみのえ', $collection->get('hiragana_name'));
        $this->assertSame('ボートレーススミノエ', $collection->get('katakana_name'));
        $this->assertSame('suminoe', $collection->get('english_name'));
        $this->assertSame('https://www.boatrace-suminoe.jp/', $collection->get('url'));
    }

    /**
     * @return void
     */
    public function testByEnglishName(): void
    {
        $collection = Stadium::byEnglishName('suminoe');
        $this->assertSame(12, $collection->get('id'));
        $this->assertSame('ボートレース住之江', $collection->get('name'));
        $this->assertSame('住之江', $collection->get('short_name'));
        $this->assertSame('ぼーとれーすすみのえ', $collection->get('hiragana_name'));
        $this->assertSame('ボートレーススミノエ', $collection->get('katakana_name'));
        $this->assertSame('suminoe', $collection->get('english_name'));
        $this->assertSame('https://www.boatrace-suminoe.jp/', $collection->get('url'));
    }

    /**
     * @return void
     */
    public function testByUrl(): void
    {
        $collection = Stadium::byUrl('suminoe');
        $this->assertSame(12, $collection->get('id'));
        $this->assertSame('ボートレース住之江', $collection->get('name'));
        $this->assertSame('住之江', $collection->get('short_name'));
        $this->assertSame('ぼーとれーすすみのえ', $collection->get('hiragana_name'));
        $this->assertSame('ボートレーススミノエ', $collection->get('katakana_name'));
        $this->assertSame('suminoe', $collection->get('english_name'));
        $this->assertSame('https://www.boatrace-suminoe.jp/', $collection->get('url'));
    }

    /**
     * @return void
     */
    public function testException(): void
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage(
            "BVP\Stadium\StadiumCore::__call() - " .
            "The specified method 'invalid' does not exist in class 'BVP\Stadium\StadiumCore'"
        );

        Stadium::invalid();
    }
}
