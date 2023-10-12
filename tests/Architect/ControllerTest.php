<?php

test('controllers must be suffixed by Controller', function() {
    expect('App\Http\Controllers')
        ->toHaveSuffix('Controller');
});