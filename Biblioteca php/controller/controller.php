<?php

class BibliotecaController
{
    public function menu($plomo)
    {
        switch ($plomo) {
            case 'todos':
                $this->mostrarTodos();
                break;
            case 'agregar':
                $this->agregarLibros();
                break;
            case 'prestamo':
                $this->hacerPrestamo();
                break;
            case 'devolucion':
                $this->hacerDevolucion();
                break;
            case 'listado':
                $this->verlistado();
                break;
            case 'cerrarSesion':
                $this->cerrarSesion();
                break;
            default:
                $this->mostrarTodos();
        }
    }

    public function mostrarTodos()
    {
        include('model/model.php');
    }

    public function agregarLibros()
    {
        include("inicio_admin.php");
    }

    public function hacerPrestamo()
    {
        include("views/prestamo.php");
    }

    public function hacerDevolucion()
    {
        include("views/devolucion.php");
    }

    public function verlistado()
    {
        header("Location: views/listado.php");
    }

    public function cerrarSesion()
    {
        header('location: log/inicio.php');
        session_destroy();
    }
}
