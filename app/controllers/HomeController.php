<?php

// HomeController is responsible for handling requests to the homepage.
// It can be extended in the future to include business logic, fetch data from models, etc.
class HomeController
{
    // The default method that is called when the route is 'home' or no specific route is set
    public function index()
    {
        // Here you could load data, call models, or prepare logic before rendering the view.
        // For now, we simply load the home view.

        require_once __DIR__ . '/../views/home.php';
    }
}
