<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'activated' => 'Activated',
            'email' => 'Email',
            'first_name' => 'First name',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
            'last_name' => 'Last name',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'registered-user' => [
        'title' => 'Registered Users',

        'actions' => [
            'index' => 'Registered Users',
            'create' => 'New Registered User',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'email' => 'Email',
            'name' => 'Name',
            'num_miembros' => 'Num miembros',
            'phone' => 'Phone',
            'surname' => 'Surname',
            
        ],
    ],

    'despensa' => [
        'title' => 'Despensas',

        'actions' => [
            'index' => 'Despensas',
            'create' => 'New Despensa',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'categoria' => 'Categoria',
            'nombre' => 'Nombre',
            'stock' => 'Stock',
            
        ],
    ],

    'recibe' => [
        'title' => 'Recibes',

        'actions' => [
            'index' => 'Recibes',
            'create' => 'New Recibe',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'id_usuario' => 'Id usuario',
            'id_producto' => 'Id producto',
            'fecha' => 'Fecha',
            'stock' => 'Stock',
            
        ],
    ],

    'editorial' => [
        'title' => 'Editorials',

        'actions' => [
            'index' => 'Editorials',
            'create' => 'New Editorial',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'nacionalidad' => 'Nacionalidad',
            
        ],
    ],

    'libro' => [
        'title' => 'Libros',

        'actions' => [
            'index' => 'Libros',
            'create' => 'New Libro',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'isbn' => 'Isbn',
            'titulo' => 'Titulo',
            'autor' => 'Autor',
            'genero' => 'Genero',
            'recomendacion_generacional' => 'Recomendacion generacional',
            'id_editorial' => 'Id editorial',
            
        ],
    ],

    'prestamo' => [
        'title' => 'Prestamos',

        'actions' => [
            'index' => 'Prestamos',
            'create' => 'New Prestamo',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'id_libro' => 'Id libro',
            'usuario_prestamo' => 'Usuario prestamo',
            'fechaInicio' => 'FechaInicio',
            'fechaFin' => 'FechaFin',
            
        ],
    ],

    'talla' => [
        'title' => 'Tallas',

        'actions' => [
            'index' => 'Tallas',
            'create' => 'New Talla',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'talla' => 'Talla',
            
        ],
    ],

    'categoria' => [
        'title' => 'Categorias',

        'actions' => [
            'index' => 'Categorias',
            'create' => 'New Categoria',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'categoria' => 'Categoria',
            
        ],
    ],

    'ropero' => [
        'title' => 'Roperos',

        'actions' => [
            'index' => 'Roperos',
            'create' => 'New Ropero',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'color' => 'Color',
            'estado' => 'Estado',
            'talla' => 'Talla',
            'categoria' => 'Categoria',
            'id_usuario' => 'Id usuario',
            
        ],
    ],

    'folleto' => [
        'title' => 'Folletos',

        'actions' => [
            'index' => 'Folletos',
            'create' => 'New Folleto',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'id_usuario' => 'Id usuario',
            'fecha' => 'Fecha',
            'cantidad_entregada' => 'Cantidad entregada',
            'tipo_folleto' => 'Tipo folleto',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];