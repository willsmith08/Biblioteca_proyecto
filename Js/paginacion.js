// Función para manejar el clic en los botones de paginación
        $(document).on('click', '.btn-pagina', function() {
            var pagina = $(this).data('pagina');  // Obtener el número de página
            cargarLibros(pagina);  // Llamar a la función para cargar los libros
        });

        function cargarLibros(pagina) {
            $.ajax({
                url: '/Biblioteca_proyecto/Controllers/todosLibrosController.php',  // Ruta del controlador
                type: 'GET',
                data: { pagina: pagina },  // Enviar el número de página
                success: function(response) {
                    var datos = JSON.parse(response);  // Parsear la respuesta JSON
                    var librosHTML = '';

                    // Crear el HTML con los nuevos libros
                    $.each(datos.libros, function(index, libro) {
                        librosHTML += '<div class="librobusqueda">' +
                            '<div class="contenLibro">' +
                                '<div class="conLibroBus1">' +
                                    '<div class="imgLibro">' +
                                        '<img src="' + (libro.immagen ? libro.immagen : "../imgs/imgLibroDefecto.png") + '" alt="">' +
                                    '</div>' +
                                '</div>' +
                                '<div class="conLibroBus2">' +
                                    '<h3 class="titulo">' + libro.titulo + '</h3>' +
                                    '<div>' +
                                        '<p class="descripcion">' + libro.descripcion + '</p>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                            '<p>Autor(es): </p>' +
                            '<p>Estado: ' + libro.estado + '</p>' +
                            '<a href="" class="tomar">Tomar prestado</a>' +
                        '</div>';
                    });

                    // Reemplazar el contenido de los libros
                    $('#contenedor-libros').html(librosHTML);

                    // Actualizar los botones de paginación si es necesario
                    var paginationHTML = '';
                    for (var i = 1; i <= datos.totalPaginas; i++) {
                        paginationHTML += '<button class="btn-pagina" data-pagina="' + i + '">' + i + '</button>';
                    }

                    $('.todasLasPaginas').html(paginationHTML);
                },
                error: function() {
                    alert("Hubo un error al cargar los libros.");
                }
            });
        }