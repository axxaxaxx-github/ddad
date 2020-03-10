function popup()
{
    alert("Tickets purchased");
}

function filterTickets()
{
    //Set variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("textInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("tickets");
    tr = table.getElementsByTagName("tr");
    //Get the value of the selected radio button
    var radios = document.getElementsByName('search');
    for (var i = 0, length = radios.length; i < length; i++) {
        if (radios[i].checked) {
            // do whatever you want with the checked radio
            selectedSearch = i;
            // only one radio can be logically checked, don't check the rest
            break;
        }
    }
    // Loop through table rows and set display to none for those that don't match the query
    // To change what is filtered by, change td = tr[i].getElementByTagname("td")[INDEX TO SEARCH FOR]
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[selectedSearch];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
            }
        }
    }
}