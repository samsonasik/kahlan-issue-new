<?php

namespace App;

class Bar
{
    public function test()
    {
        return (new Foo())->test();
    }
}
