<?php

$numFrames = 200;
$width = 1000;
$height = 1000;



function spriteOne( $frame ) {

     return array( "x" => $frame * $GLOBALS['width']/$GLOBALS['numFrames'], "y" => $GLOBALS['height']/10 * sin( $frame / 10 ) + $GLOBALS['height']/2, "scale" => 1, "visible" => array(1) );
    
}

function spriteTwo( $frame ) {

    return array( "x" => $frame * $GLOBALS['width']/$GLOBALS['numFrames'], "y" => $GLOBALS['height']/10 * cos( $frame / 10 ) + $GLOBALS['height']/2, "scale" => 1, "visible" => array(1) );
    
}

$tracks = array();
$trackOne = array( "visible" => false );
$trackTwo = array( "visible" => false );
array_push($tracks, array( $trackOne, $trackTwo ) );

for( $i = 0; $i <= $numFrames; $i++ ) {
    
    $trackOne = spriteOne( $i );
    $trackTwo = spriteTwo( $i );
    array_push($tracks, array( $trackOne, $trackTwo ) );
    
}

$trackOne = array( "visible" => false );
$trackTwo = array( "visible" => false );
array_push($tracks, array( $trackOne, $trackTwo ) );
array_push($tracks, array( 
                        array( "emojis" => array() ), 
                        array( "emojis" => array() ) 
                    )
           );

$contents = $tracks ;

$file = 'tracks.JSON';

$current = json_encode( $contents );
// Écrit le résultat dans le fichier
file_put_contents($file, $current);
?>