<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
   integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
   crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <title>Document</title>
</head>
<body>

<button id="click">teste</button>
<a href="https://www.google.com" onClick="enviaDivida(event)">google</a>
<script>
   function enviaDivida(e){
   e.preventDefault();

    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Deseja realmente enviar os dados para a Central da Cobrar Simples?',
  text: "Atenção os dados serão enviados imediatamente!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Sim, enviar dados da dívida!',
  cancelButtonText: 'Não, cancelar!',
  reverseButtons: true
}).then((result) => {
  if (result.value) {
    swalWithBootstrapButtons.fire(
      'Cancelar!',
      'Your file has been deleted.',
      'success'
    )
    location.href = e.target.href;
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Processo Cancelado',
      'Nada ocorreu',
      'info'
    )
  }
})
}
   
   
</script>


</body>
</html>