window.onload = function() {
  if (typeof condicionCumplida !== 'undefined' && condicionCumplida) {
    Swal.fire({
      type: 'success',   
      icon: 'success',
      title: 'Tu direccion a sido creada sactisfactoriamente',
      showConfirmButton: false,
      timer: 2500
    })
  }
};
