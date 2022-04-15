
    var table = document.querySelector("#table");

    var dataTable = new DataTable(table, {
      perPage: 3,
      perPageSelect: [3, 6, 9, 12],
    });
