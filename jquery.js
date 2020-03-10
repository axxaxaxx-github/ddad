<script>
$(document).ready(function(){
  $("#myInput").on("keyup", getAllTickets() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(getAllTickets() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 