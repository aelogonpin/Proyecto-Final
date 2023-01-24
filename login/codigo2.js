             
                  Swal.fire({
                      type: 'success',                          
                      title: '¡Conexión exitosa!',                                                
                      confirmButtonColor: '#3085d6',                          
                      confirmButtonText: 'Ingresar'
                    }).then((result) => {
                      if (result.value) {
                          window.location.href = "../vistas/pag_inicio.php";                          
                      }
                    });