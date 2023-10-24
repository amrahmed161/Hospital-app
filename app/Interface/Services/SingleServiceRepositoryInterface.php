<?php

namespace App\Interface\Services;

interface SingleServiceRepositoryInterface
{
    // Get SingleServices
    public function index();

    // Get SingleServices
    public function store($request);

    // Get SingleServices
    public function update($request);

    // Get SingleServices
    public function destroy($request);
}
