
<?php 

use PHPUnit\Framework\TestCase;

// class BeerTest extends TestCase

class BeerSongTest extends PHPUnit\Framework\TestCase
{
    public static function setUpBeforeClass(): void
    {
        require_once 'BeerSong.php';
    }
    public function testFirstVerse(): void
    {
        $expected = "99 bottles of beer on the wall, 99 bottles of beer.\n" .
            "Take one down and pass it around, 98 bottles of beer on the wall.\n";
        $song = new BeerSong();
        $this->assertEquals($expected, $song->verse(99));
    }
    public function testVerse2(): void
    {
        $expected = "2 bottles of beer on the wall, 2 bottles of beer.\n" .
            "Take one down and pass it around, 1 bottle of beer on the wall.\n";
        $song = new BeerSong();
        $this->assertEquals($expected, $song->verse(2));
    }
    public function testVerse1(): void
    {
        $expected = "1 bottle of beer on the wall, 1 bottle of beer.\n" .
            "Take it down and pass it around, no more bottles of beer on the wall.\n";
        $song = new BeerSong();
        $this->assertEquals($expected, $song->verse(1));
    }
    public function testVerse0(): void
    {
        $expected = "No more bottles of beer on the wall, no more bottles of beer.\n" .
            "Go to the store and buy some more, 99 bottles of beer on the wall.";
        $song = new BeerSong();
        $this->assertEquals($expected, $song->verse(0));
    }
}


?>