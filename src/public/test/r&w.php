<?php
interface Reader
{
    public function read();
}

interface Writer
{
    public function write($value);
}

class Configure implements Reader, Writer
{
    public function read()
    {
        // 読み込み処理
    }

    public function write($value)
    {
        // 書き込み処理
    }
}
