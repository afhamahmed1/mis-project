<table id="myTable">
  <tr>
    <th onclick="sortTable(0)">Name</th>
    <th onclick="sortTable(1)">Quantity</th>
    <th onclick="sortTable(2)">Sales</th>
  </tr>
  <tr>
    <td>John</td>
    <td>10</td>
    <td>$50</td>
  </tr>
  <tr>
    <td>Bob</td>
    <td>5</td>
    <td>$20</td>
  </tr>
  <tr>
    <td>Sara</td>
    <td>15</td>
    <td>$30</td>
  </tr>
</table>

<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc"; 
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
// Each time a switch is done, increase this count by 1:
switchcount ++;
} else {
/* If no switching has been done AND the direction is "asc",
set the direction to "desc" and run the while loop again. */
if (switchcount == 0 && dir == "asc") {
dir = "desc";
switching = true;
}
}
}
}
</script>