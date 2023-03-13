             
                  Swal.fire({
                      type: 'success',                          
                      title: '¡Correo enviado!',                                                
                      confirmButtonColor: '#3085d6',                          
                      confirmButtonText: 'Volver al servidor'
                    }).then((result) => {
                      if (result.value) {
                          window.location.href = "../../../../Pagina_base/";                          
                      }
                    });