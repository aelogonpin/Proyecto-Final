window.onload = function() {
  if (typeof condicionCumplida !== 'undefined' && condicionCumplida) {
    Swal.fire({
      type: 'success',                          
      title: 'Usuario eliminado',                                                
      confirmButtonColor: '#3085d6',                          
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.value) {
          window.location.href = "../serviciousers";                          
      }
    });
  }

  if (typeof SEKELEKE !== 'undefined' && SEKELEKE) {
    Swal.fire({
      type: 'success',                          
      title: 'Usuario creado',                                                
      confirmButtonColor: '#3085d6',                          
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.value) {
          window.location.href = "../serviciousers";                          
      }
    });
  }

  if (typeof KALATRABA !== 'undefined' && KALATRABA) {
    Swal.fire({
      type: 'success',                          
      title: 'Usuario modificado',                                                
      confirmButtonColor: '#3085d6',                          
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.value) {
          window.location.href = "../serviciousers";                          
      }
    });
  }

};
