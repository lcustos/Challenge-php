<?php

function invertTree(?BinaryNode $root): ?BinaryNode
{
    if ($root === null) {
        return null;
    }

    $left = invertTree($root->left);
    $right = invertTree($root->right);

    $root->left = $right;
    $root->right = $left;

    return $root;
}

