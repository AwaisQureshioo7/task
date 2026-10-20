  <!doctype html>
  <html lang="en">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Dashboard</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  </head>

  <body>
      <main class="container py-5">
          <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 mb-4">
              <div>
                  <h1 class="h2 mb-1">Dashboard Data</h1>
                  <p class="text-body-secondary mb-0">View and manage your car records.</p>
              </div>

              <form action="{{ route('logout') }}" method="POST" class="m-0">
                  @csrf
                  <button type="submit" class="btn btn-outline-danger">
                      Logout
                  </button>
              </form>
          </div>

          <div class="card border-0 shadow-sm">
              <div class="card-header bg-primary text-white py-3">
                  <h2 class="h5 mb-0">Cars List</h2>
              </div>

              <div class="card-body p-0">
                  <div class="table-responsive">
                      <table id="carsTable" class="table table-striped table-hover align-middle mb-0">
                          <thead class="table-light">
                              <tr>
                                  <th scope="col" class="px-3">ID</th>
                                  <th scope="col">Brand</th>
                                  <th scope="col">Model</th>
                                  <th scope="col">Year</th>
                                  <th scope="col" class="pe-3">Description</th>
                              </tr>
                          </thead>

                          <tbody id="table-body">
                          </tbody>

                      </table>
                  </div>
              </div>
          </div>
      </main>


      <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
      <script src="https://cdn.datatables.net/2.3.4/js/dataTables.min.js"></script>


      <script>
          $(document).ready(function() {

              $.ajax({
                  url: '/api/cars',
                  type: 'GET',
                  success: function(data) {
                      let rows = '';
                      data.forEach(function(car) {
                          rows += `
                        <tr>
                            <td>${car.id}</td>
                            <td>${car.brand}</td>
                            <td>${car.model}</td>
                            <td>${car.year}</td>
                            <td>${car.description ?? ''}</td>
                        </tr>
                    `;

                      });

                      $('#table-body').html(rows);

                      $('#carsTable').DataTable();
                  },

                  error: function(error) {
                      console.log(error);
                  }
              });

          });
      </script>




  </body>

  </html>
