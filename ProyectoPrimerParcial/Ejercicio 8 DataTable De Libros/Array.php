<?php 
  header('Content-Type: application/json');
        $data = [];
    

            $data []= [
                "Nombre" => "Libro1",
                "Autor" => "AutorLibro1",
                "Año" => 1950,
                "NumeroPaginas" => 80,
                "ISBN" => 3655774,
                "Capitulos"  => [
                  
                    "Capitulo1" => "Inicio",
                    "PaginasCap1" => 29,
                    "Capitulo2" => "Desarrollo",
                    "PaginasCap2" => 15,
                    "Capitulo3" => "Final",
                    "PaginasCap3" => 34
                      ]
            ];
    
            $data []= [
                "Nombre" => "Libro2",
                "Autor" => "AutorLibro2",
                "Año" => 1960,
                "NumeroPaginas" => 50,
                "ISBN" => 46658682,
                "Capitulos"  => [
                    "Capitulo1" => "Inicio",
                    "PaginasCap1" => 25,
                    "Capitulo2" => "Final",
                    "PaginasCap2" => 25,
                   
                   
                ]
                ];
                   $data []=[
                "Nombre" => "Libro3",
                "Autor" => "AutorLibro3",
                "Año" => 2010,
                "NumeroPaginas" => 80,
                "ISBN" => 1234567890,
                "Capitulos"  => [
                    "Capitulo1" => "Inicio",
                    "PaginasCap1" => 20,
                    "Capitulo2" => "Desarrollo",
                    "PaginasCap2" => 20,
                    "Capitulo3" => "Desenlace",
                    "PaginasCap3" => 20,
                    "Capitulo4" => "Final",
                    "PaginasCap4" => 20,
                   ]
                ];
                   $data []=[ 
                "Nombre" => "Libro4",
                "Autor" => "AutorLibro4",
                "Año" => 2003,
                "NumeroPaginas" => 200,
                "ISBN" => 1234567890,
                "Capitulos"  => [
                    "Capitulo1" => "Inicio",
                    "PaginasCap1" => 30,
                    "Capitulo2" => "Desarrollo",
                    "PaginasCap2" => 40,
                    "Capitulo3" => "Desenlace",
                    "PaginasCap3" => 50,
                    "Capitulo4" => "Final",
                    "PaginasCap4" => 80
             ]];
                   $data []=[
                "Nombre" => "Libro5",
                "Autor" => "AutorLibro5",
                "Año" => 1999,
                "NumeroPaginas" => 100,
                "ISBN" => 1234567890,
                "Capitulos"  => [
                    "Capitulo1" => "Inicio",
                    "PaginasCap1" => 50,
                    "Capitulo2" => "Cierre",
                    "PaginasCap2" => 50,
             ]];
                   $data []=[
                "Nombre" => "Libro6",
                "Autor" => "AutorLibro6",
                "Año" => 1990,
                "NumeroPaginas" => 150,
                "ISBN" => 3466763,
                "Capitulos"  => [
                    "Capitulo1" => "Inicio",
                    "PaginasCap1" => 50,
                    "Capitulo2" => "Desarrollo",
                    "PaginasCap2" => 50,
                    "Capitulo3" => "Final",
                    "PaginasCap3" => 50,
           
               ]];
                   $data []=[
                "Nombre" => "Libro7",
                "Autor" => "AutorLibro7",
                "Año" => 1998,
                "NumeroPaginas" => 135,
                "ISBN" => 345764,
                "Capitulos"  => [
                    "Capitulo1" => "Introducion",
                    "PaginasCap1" => 55,
                    "Capitulo2" => "Desarrollo",
                    "PaginasCap2" => 55,
                    "Capitulo3" => "Conclusion",
                    "PaginasCap3" => 25,
                  
               ]];
                   $data []=[
                "Nombre" => "Libro8",
                "Autor" => "AutorLibro8",
                "Año" => 1941,
                "NumeroPaginas" => 100,
                "ISBN" => 5423,
                "Capitulos"  => [
                    "Capitulo1" => "Inicio",
                    "PaginasCap1" => 25,
                    "Capitulo2" => "Desarrollo",
                    "PaginasCap2" => 25,
                    "Capitulo3" => "Desenlace",
                    "PaginasCap3" => 25,
                    "Capitulo4" => "Final",
                    "PaginasCap4" => 25,
                ]];
                    $data []=[
                "Nombre" => "Libro9",
                "Autor" => "AutorLibro9",
                "Año" => 1942,
                "NumeroPaginas" => 200,
                "ISBN" => 67889,
                "Capitulos"  => [
                    "Capitulo1" => "Inicio",
                    "PaginasCap1" => 50,
                    "Capitulo2" => "Desarrollo",
                    "PaginasCap2" => 50,
                    "Capitulo3" => "Desenlace",
                    "PaginasCap3" => 50,
                    "Capitulo4" => "Conclusion",
                    "PaginasCap4" => 50
               ]];
                    $data []=[
                "Nombre" => "Libros10",
                "Autor" => "AutorLibro10",
                "Año" => 1940,
                "NumeroPaginas" => 50,
                "ISBN" => 34567,
                "Capitulos"  => [
                    "Capitulo1" => "Inicio",
                    "PaginasCap1" => 25,
                    "Capitulo2" => "Final",
                    "PaginasCap2" => 25
                
                ]];
                
              
        

                echo json_encode(['data' => $data ]);


?>