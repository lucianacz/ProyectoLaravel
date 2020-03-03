<?php
  mail('culturasariri@gmail.com', $_POST['name'], $_POST['email'], $_POST['mensaje']);
?>

<script>


function confirm(event){
  swal({
  title: "Enviado con exito",
  icon: "success",
})
};

onclick="event.preventDefault();confirm();"


</script>
