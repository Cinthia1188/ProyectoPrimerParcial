<?php
$Libros=[];


$Libros[]=[
  "libro1" =>[
                "Nombre" => "Libro1",
                "Autor" => "AutorLibro1",
                "Año" => 1940,
                "Numero Paginas" => 120,
                "ISBN" => 1234567890,
                "capitulos" =>[
                    [
                     "Capitulo1" => "Inicio",
                    "PaginasCap1" => 40,
                    ],
                    [
                    "Capitulo2" => "Cuerpo",
                    "PaginasCap2" => 40,
                    ],
                    [
                   "Capitulo3" => "Final",
                    "PaginasCap3" => 40
                    ]
                    ]
                    ],

                  
                "libro2" =>[
                "Nombre" => "Libro2",
                "Autor" => "AutorLibro2",
                "Año" => 1941,
                "Numero Paginas" => 75,
                "ISBN" => 1234567890,
                "capitulos" =>[
                    [
                     "Capitulo1" => "Inicio",
                    "PaginasCap1" => 25,
                    ],
                    [
                    "Capitulo2" => "Cuerpo",
                    "PaginasCap2" => 25,
                    ],
                    [
                   "Capitulo3" => "Final",
                    "PaginasCap3" => 25
                    ]
                    ]
                    ],
                    

                "libro3" =>[
                "Nombre" => "Libro3",
                "Autor" => "AutorLibro3",
                "Año" => 1990,
                "Numero Paginas" => 120,
                "ISBN" => 1234567890,
                "capitulos" =>[
                    [
                     "Capitulo1" => "Inicio",
                    "PaginasCap1" => 40,
                    ],
                    [
                    "Capitulo2" => "Cuerpo",
                    "PaginasCap2" => 40,
                    ],
                    [
                   "Capitulo3" => "Final",
                    "PaginasCap3" => 40
                    ]
                    ]
                  ],

                "libro4" =>[
                "Nombre" => "Libro4",
                "Autor" => "AutorLibro4",
                "Año" => 1988,
                "Numero Paginas" => 150,
                "ISBN" => 1234567890,
                "capitulos" =>[
                    [
                     "Capitulo1" => "Inicio",
                    "PaginasCap1" => 50,
                    ],
                    [
                    "Capitulo2" => "Cuerpo",
                    "PaginasCap2" => 50,
                    ],
                    [
                   "Capitulo3" => "Final",
                    "PaginasCap3" => 50
                    ]
                    ]
                  ],
                    
                "libro5" =>[
                "Nombre" => "Libro5",
                "Autor" => "AutorLibro5",
                "Año" => 2000,
                "Numero Paginas" => 180,
                "ISBN" => 1237458963,
                "capitulos" =>[
                    [
                     "Capitulo1" => "Inicio",
                    "PaginasCap1" => 60,
                    ],
                    [
                    "Capitulo2" => "Cuerpo",
                    "PaginasCap2" => 60,
                    ],
                    [
                   "Capitulo3" => "Final",
                    "PaginasCap3" => 60
                    ]
                    ]
                  ],

                "libro6" =>[
                "Nombre" => "Libro6",
                "Autor" => "AutorLibro6",
                "Año" => 2001,
                "Numero Paginas" => 240,
                "ISBN" => 7541236985,
                "capitulos" =>[
                    [
                     "Capitulo1" => "Inicio",
                    "PaginasCap1" => 80,
                    ],
                    [
                    "Capitulo2" => "Desarrollo",
                    "PaginasCap2" => 80,
                    ],
                    [
                   "Capitulo3" => "Final",
                    "PaginasCap3" => 80
                    ]
                    ]
                  ],

                "libro7" =>[
                "Nombre" => "Libro7",
                "Autor" => "AutorLibro7",
                "Año" => 2003,
                "Numero Paginas" => 60,
                "ISBN" => 7485123694,
                "capitulos" =>[
                    [
                     "Capitulo1" => "Inicio",
                    "PaginasCap1" => 20,
                    ],
                    [
                    "Capitulo2" => "Cuerpo",
                    "PaginasCap2" => 20,
                    ],
                    [
                   "Capitulo3" => "Final",
                    "PaginasCap3" => 20
                    ]
                    ]
                  ],
                    
                "libro8" =>[
                "Nombre" => "Libro8",
                "Autor" => "AutorLibro8",
                "Año" => 1950,
                "Numero Paginas" => 210,
                "ISBN" => 4125879632,
                "capitulos" =>[
                    [
                     "Capitulo1" => "Inicio",
                    "PaginasCap1" => 70,
                    ],
                    [
                    "Capitulo2" => "Cuerpo",
                    "PaginasCap2" => 70,
                    ],
                    [
                   "Capitulo3" => "Final",
                    "PaginasCap3" => 70
                    ]
                    ]
                  ],

                "libro9" =>[
                "Nombre" => "Libro9",
                "Autor" => "AutorLibro9",
                "Año" => 2003,
                "Numero Paginas" => 75,
                "ISBN" => 1234567890,
                "capitulos" =>[
                    [
                     "Capitulo1" => "Inicio",
                    "PaginasCap1" => 25,
                    ],
                    [
                    "Capitulo2" => "Cuerpo",
                    "PaginasCap2" => 25,
                    ],
                    [
                   "Capitulo3" => "Final",
                    "PaginasCap3" => 25
                    ]
                    ]
                  ],

                 "libro10" =>[
                "Nombre" => "Libro10",
                "Autor" => "AutorLibro10",
                "Año" => 2003,
                "Numero Paginas" => 300,
                "ISBN" => 1234126890,
                "capitulos" =>[
                    [
                     "Capitulo1" => "Inicio",
                    "PaginasCap1" => 100,
                    ],
                    [
                    "Capitulo2" => "Desarrollo",
                    "PaginasCap2" => 100,
                    ],
                    [
                   "Capitulo3" => "Final",
                    "PaginasCap3" => 100
                    ]
                    ]
                    ],
                  ];
                    
                    echo json_encode($Libros);
                    ?>