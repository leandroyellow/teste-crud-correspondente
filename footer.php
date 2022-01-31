<footer>
   
</footer>



</body>
</html>
<script>
   $('.alerta').on('click',function(e){
      e.preventDefault();
      var self = $(this);
      console.log(self.data('title'));
      Swal.fire({
         title: 'Confirmar exclusão?',
         text: "Certeza que dejesa excluir correspondência!",
         icon: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Excluir'
      }).then((result) => {
         if (result.isConfirmed) {
            Swal.fire(
               'Deleted!',
               'Your file has been deleted.',
               'success'
            )
            location.href = self.attr('href');   
         }
      })
   })
</script>
