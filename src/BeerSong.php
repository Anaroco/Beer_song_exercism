<?php

namespace App;

class BeerSong
{
    public function verse($verse){
        $result_song = '';
        $decrimentBeer = $verse - 1;
        switch ($verse){
            case 2:
                $result_song  .= "2 bottles of beer on the wall, 2 bottles of beer.\n"
                                 ."Take one down and pass it around, 1 bottle of beer on the wall.\n";
                break;
            case 1:
                $result_song  .= "1 bottle of beer on the wall, 1 bottle of beer.\n"
                                 ."Take it down and pass it around, no more bottles of beer on the wall.\n";
                break;
            case 0:
                $result_song  .= "No more bottles of beer on the wall, no more bottles of beer.\n"
                                 ."Go to the store and buy some more, 99 bottles of beer on the wall.";
                break;
            default:
                $result_song  .= "{$verse} bottles of beer on the wall, {$verse} bottles of beer.\n"
                                 ."Take one down and pass it around, {$decrimentBeer} bottles of beer on the wall.\n";
                break;
        }
        return $result_song;
    }
    public function verses($start, $end){
        $result_strint  = '';
        foreach (range($start, $end) as $item){
            $result_strint.= $this->verse($item);
            if($item > $end){
                $result_strint .= "\n";
            }
        }
        return $result_strint;
    }
    public function lyrics(){
        return $this->verses(99, 0);
    }
}