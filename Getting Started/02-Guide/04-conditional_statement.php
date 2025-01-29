<?php

/**
 * Relational Operator (Works bt. two values)
 *  >
 *  <
 *  >=
 *  <=
 *  ==
 *  !
 */

$name = "Laxman";
$age = 22;
if ($name) {
    // do this
    if ($age) {
        // do this
    } else {
        // do that
    }
} else if ($name) {
    // do that
    if ($age) {
        // do this
    } else {
        // do that
    }
} else {
    // else do this
}
