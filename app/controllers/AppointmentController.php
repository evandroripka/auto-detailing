<?php
class AppointmentController {
    public function index() {
        // Aqui você pode adicionar lógica para buscar dados necessários para a página Appointment, se precisar.

        // Inclui a view da página Appointment
        require_once __DIR__ . '/../views/appointment.php';
    }
}
