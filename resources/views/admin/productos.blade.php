@extends('layout.admin')
@section('title','Panel del administrador')

@section('content')
<main class="body-content">
    <!-- Navigation Bar -->
    @include('layout.navbar_top')

    <div class="ms-content-wrapper">
      <div class="row">
        <div class="col-md-12">
          <h1 class="db-header-title">Welcome, Anny</h1>
        </div>

        <div class="col-12 mb-3">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                  <div class="statistics-item">
                    <img class="mr-2" style="width:50px; height:50px;" src="assets/img/icons/team.png" alt="">
                    <p>
                      Usuarios nuevos
                    </p>
                    <h2>54</h2>
                    <label class="badge badge-outline-success badge-pill">2.7% increases</label>
                  </div>
                  <div class="statistics-item">
                    <img class="mr-2" style="width:50px; height:50px;" src="assets/img/icons/coins.png" alt="">
                    <p>
                      Ingresos
                    </p>
                    <h2>$7,654.55</h2>
                    <label class="badge badge-outline-danger badge-pill">30% decrease</label>
                  </div>
                  <div class="statistics-item">
                    <img class="mr-2" style="width:50px; height:50px;" src="assets/img/icons/diagram.png" alt="">
                    <p>
                      Salida
                    </p>
                    <h2>$3500.00</h2>
                    <label class="badge badge-outline-success badge-pill">12% increase</label>
                  </div>
                  <div class="statistics-item">
                    <img class="mr-2" style="width:50px; height:50px;" src="assets/img/icons/customer-service.png" alt="">
                    <p>
                      Comandas
                    </p>
                    <h2>5</h2>
                    <label class="badge badge-outline-success badge-pill">57% increase</label>
                  </div>
                  <div class="statistics-item">
                    <img class="mr-2" style="width:50px; height:45px;" src="assets/img/icons/delivery-bike.png" alt="">
                    <p>
                      Pedidos
                    </p>
                    <h2>541</h2>
                    <label class="badge badge-outline-success badge-pill">10% increase</label>
                  </div>
                  <div class="statistics-item">
                    <img class="mr-2" style="width:50px; height:50px;" src="assets/img/icons/achievement.png" alt="">
                    <p>                      
                      Ventas
                    </p>
                    <h2>355</h2>
                    <label class="badge badge-outline-danger badge-pill">16% decrease</label>
                  </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Recent Orders Requested -->
        <div class="col-xl-6 col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <div class="d-flex justify-content-between">
                <img class="mr-2" style="width:50px; height:50px;" src="assets/img/icons/food-tray.png" alt="">
                <div class="align-self-center align-left">
                  <h6>Ordenes realizadas recientemente</h6>
                </div>
                <button type="button" class="btn btn-primary">Ver todo</button>
              </div>
            </div>
            <div class="ms-panel-body">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Food Item</th>
                      <th scope="col">Price</th>
                      <th scope="col">Product ID</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ms-table-f-w"> <img src="assets/img/costic/pizza.jpg" alt="people"> Pizza </td>
                      <td>$19.99</td>
                      <td>67384917</td>
                    </tr>
                    <tr>
                      <td class="ms-table-f-w"> <img src="assets/img/costic/french-fries.jpg" alt="people"> French Fries </td>
                      <td>$14.59</td>
                      <td>789393819</td>
                    </tr>
                    <tr>
                      <td class="ms-table-f-w"> <img src="assets/img/costic/cereals.jpg" alt="people"> Multigrain Hot Cereal </td>
                      <td>$25.22</td>
                      <td>137893137</td>
                    </tr>
                    <tr>
                      <td class="ms-table-f-w"> <img src="assets/img/costic/egg-sandwich.jpg" alt="people"> Fried Egg Sandwich </td>
                      <td>$11.23</td>
                      <td>235193138</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header new">
              <img class="mr-2" style="width:50px; height:50px;" src="assets/img/icons/calendar.png" alt="">
              <h6>Ganancia mensual</h6>
              <select class="form-control new" id="exampleSelect">
                <option value="1">Enero</option>
                <option value="2">Febrero</option>
                <option value="3">March </option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="1">June</option>
                <option value="2">July</option>
                <option value="3">August</option>
                <option value="4">September</option>
                <option value="5">October</option>
                <option value="4">November</option>
                <option value="5">December</option>
              </select>
            </div>
            <div class="ms-panel-body">
              <span class="progress-label"> <strong>Week 1</strong> </span>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
              </div>
              <span class="progress-label"> <strong>Week 2</strong> </span>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
              </div>
              <span class="progress-label"> <strong>Week 3</strong> </span>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
              </div>
              <span class="progress-label"> <strong>Week 4</strong> </span>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Food Orders -->
        <div class="col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <div class="d-flex justify-content-left">
                <img class="mr-2" style="width:50px; height:50px;" src="assets/img/icons/order-food.png" alt="">
                <div class="align-self-center align-left">
                  <h6>Ordenes en tendencia</h6>
                </div>
              </div>
            </div>
            <div class="ms-panel-body">
              <div class="row">

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                  <div class="ms-card no-margin">
                    <div class="ms-card-img">
                      <img src="assets/img/costic/food-5.jpg" alt="card_img">
                    </div>
                    <div class="ms-card-body">
                      <div class="ms-card-heading-title">
                        <h6>Meat Stew</h6>
                        <span class="green-text"><strong>$25.00</strong></span>
                      </div>

                      <div class="ms-card-heading-title">
                        <p>Orders <span class="red-text">15</span></p>
                        <p>Income <span class="red-text">$175</span></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                  <div class="ms-card no-margin">
                    <div class="ms-card-img">
                      <img src="assets/img/costic/food-2.jpg" alt="card_img">
                    </div>
                    <div class="ms-card-body">
                      <div class="ms-card-heading-title">
                        <h6>Pancake</h6>
                        <span class="green-text"><strong>$50.00</strong></span>
                      </div>

                      <div class="ms-card-heading-title">
                        <p>Orders <span class="red-text">75</span></p>
                        <p>Income <span class="red-text">$275</span></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                  <div class="ms-card no-margin">
                    <div class="ms-card-img">
                      <img src="assets/img/costic/food-4.jpg" alt="card_img">
                    </div>
                    <div class="ms-card-body">
                      <div class="ms-card-heading-title">
                        <h6>Burger</h6>
                        <span class="green-text"><strong>$45.00</strong></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                  <div class="ms-card no-margin">
                    <div class="ms-card-img">
                      <img src="assets/img/costic/food-3.jpg" alt="card_img">
                    </div>
                    <div class="ms-card-body">
                      <div class="ms-card-heading-title">
                        <h6>Saled</h6>
                        <span class="green-text"><strong>$85.00</strong></span>
                      </div>
                      <div class="ms-card-heading-title">
                        <p>Orders <span class="red-text">175</span></p>
                        <p>Income <span class="red-text">$775</span></p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <!-- END/Food Orders -->
        <!-- Recent Placed Orders< -->
        <div class="col-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <div class="d-flex justify-content-left">
                <img class="mr-2" style="width:50px; height:50px;" src="assets/img/icons/smartphone.png" alt="">
                <div class="align-self-center align-left">
                  <h6>Pedidos realizados recientemente</h6>
                </div>
              </div>
            </div>
            <div class="ms-panel-body">
              <div class="table-responsive">
                <table class="table table-hover thead-primary">
                  <thead>
                    <tr>
                      <th scope="col">Order ID</th>
                      <th scope="col">Order Name</th>
                      <th scope="col">Customer Name</th>
                      <th scope="col">Location</th>
                      <th scope="col">Order Status</th>
                      <th scope="col">Delivered Time</th>
                      <th scope="col">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>French Fries</td>
                      <td>Jhon Leo</td>
                      <td>New Town</td>
                      <td><span class="badge badge-primary">Pending</span>
                      </td>
                      <td>10:05</td>
                      <td>$10</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Mango Pie</td>
                      <td>Kristien</td>
                      <td>Old Town</td>
                      <td><span class="badge badge-dark">Cancelled</span>
                      </td>
                      <td>14:05</td>
                      <td>$9</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>FrieD Egg Sandwich</td>
                      <td>Jack Suit</td>
                      <td>Oxford Street</td>
                      <td><span class="badge badge-success">Delivered</span>
                      </td>
                      <td>12:05</td>
                      <td>$19</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Lemon Yogurt Parfait</td>
                      <td>Alesdro Guitto</td>
                      <td>Church hill</td>
                      <td><span class="badge badge-success">Delivered</span>
                      </td>
                      <td>12:05</td>
                      <td>$18</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Spicy Grill Sandwich</td>
                      <td>Jacob Sahwny</td>
                      <td>palace Road</td>
                      <td><span class="badge badge-success">Delivered</span>
                      </td>
                      <td>12:05</td>
                      <td>$21</td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Chicken Sandwich</td>
                      <td>Peter Gill</td>
                      <td>Street 21</td>
                      <td><span class="badge badge-primary">Pending</span>
                      </td>
                      <td>12:05</td>
                      <td>$15</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>




@endsection
