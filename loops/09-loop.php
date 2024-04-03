<?php 

$peymentStatus = 'paid';

switch ( $peymentStatus ) {
    case 'paid':
        echo 'paid';
        break;
    
    case 'declined':
        echo 'declined';
        break;
    
    case 'pendding':
        echo 'pendding';
        break;

    default:
        echo 'Unknown Payment Status';
}