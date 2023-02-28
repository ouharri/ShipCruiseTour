<?php

class AboutController
{
    public function index(): void
    {
        $data = [];
        View::load('about', $data);
    }
}