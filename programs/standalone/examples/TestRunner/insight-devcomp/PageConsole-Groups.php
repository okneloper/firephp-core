<?php

$inspector = FirePHP::to("page"); 
 
$console = $inspector->console();

$group = $console->group('test-group-1');
$group->log('Test Group 1');
$group->log('Test Value 1');

$group1 = $group->group('sub-group-for-test-group-1');
$group1->log('Sub-group for Test Group 1');
$group1->log('Test Value 2');



$group3 = $console->group('test-group-2')->open();
$console->log('Test Group 2');
$console->log('Test Value 3');

    $group4 = $console->group('sub-group-for-test-group-2');
    $group4->log('Sub-group for Test Group 2');
    $group4->log('Test Value 4');

$group3->close();


$group5 = $console->group('test-group-3');
$group5->log('Test Group 3');
$group5->log('Test Value 5');

    $group6 = $group5->group('sub-group-1-for-test-group-3');
    $group6->log('Sub-group 1 for Test Group 3');
    $group6->log('Test Value 6');

    $group7 = $group5->group('sub-group-2-for-test-group-3')->open();
    $group5->log('Sub-group 2 for Test Group 3');
    $group5->log('Test Value 7');
    
        $group6 = $group5->group('sub-group-1-for-sub-group-2-for-test-group-3');
        $group6->log('Sub-group 1 for Sub-group 2 for Test Group 3');
        $group6->log('Test Value 8');
        
        $group8 = $group5->group('sub-group-2-for-sub-group-2-for-test-group-3')->open();
        $group5->log('Sub-group 2 for Sub-group 2 for Test Group 3');
        $group5->log('Test Value 9');
        
            $group9 = $group5->group('sub-group-1-for-sub-group-2-for-sub-group-2-for-test-group-3');
            $group9->log('Sub-group 1 for Sub-group 2 for Sub-group 2 for Test Group 3');
            $group9->log('Test Value 10');
        
        $group8->close();

    $group7->close();
