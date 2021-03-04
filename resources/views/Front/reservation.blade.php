@extends("layouts.app")


@section('header')
    <title xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">Avant-toi-dispo</title>
    <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">
    <script src="sweetalert2/dist/sweetalert2.min.js"></script>

@endsection

@section('content')

    <script >


    function fonction1() {
    var variable1 = parseFloat(document.getElementById("quantityN").value);
    var variable2 = parseFloat(document.getElementById("quantityES").value);
    if(variable1 != ""|| variable2 != "" ) {
    var variable3 = (variable1) *16;
    var variable4=  (variable2)*13;
    document.getElementById("total1").value = variable3 + " dt";
     document.getElementById("total2").value = variable4 + " dt";
     document.getElementById("total").value = variable4 + variable3 ;
    } else {
    document.getElementById("total1").value = "erreur";
     document.getElementById("total2").value = "erreur";
    }
    }
    </script>
    <div id="page-body" >
        <section id="session-overview">
            <section class="session-details ">

                <div class="poster-container">
                    <img src="/front/images/avanttoi.jpg" class="poster-portrait initial loading" data-was-processed="true">

{{--                  <img class="poster" src="/Media/Poster?siteToken=saevyacndmrqgwq63dsdqgj17g&amp;code=0000002351" alt="Focus / Diversion" />--}}
                </div>

                <section class="film-details">
                    <div class="film-details-header">

                        <div class="movie-title-container">
                            <h3>
                                <span>Romance/Drame</span>
                            </h3>
                        </div>
                        <div>

                            <span>
                        Romance,Love,Drame <br>
                                (104 minutes)
                    </span>
                        </div>
                    </div>
                </section>
            </section>
        </section>
<br>
    </div>

  <form  method="post"  action="{{ route('addReservation')}}">
{{--      {{ csrf_field() }}--}}
      @csrf
      <div class="film-details-body">

              <div class="form-group col-md-4">
              <label  for="date">Reservation Name</label>

              <input  type="text" name="username" id="username" value="" placeholder="enter name of reservation" />
              <br>
              </div>


          <div class="form-group col-md-4">

              <label  for="date">Film </label>

{{--              <label name="name" type="date"  >Me Before you</label>--}}

            <input  type="text" name="name" id="name" value=" me before you"  />
              <br>
          </div>

          <div class="form-group col-md-4">
              <label  type="date" > Date</label>
              <input  type="text"  name="date" id="date" value=" lundi, 15 f&#233;vrier"  />
              <br>
          </div>
          <div class="form-group col-md-4">

              <label for="FilmLength">Time</label>
              <input   type="text" name="time" id="time" value="12:00 " />
{{--              <text name="duree" for="FilmLength">--}}
{{--                  12:00--}}
{{--                  (104 minutes)--}}
{{--              </text>--}}
          </div>

          <div class="form-group ">
              <label for="ScreenName">Screen</label>
              <input  type="text" name="salle" id="salle" value="salle4"
                    />
{{--              <text name="salle" for="ScreenName"> Salle 4</text>--}}
          </div>
      </div>


      <div class="underlined">
          <div class="page-heading highlight-foreground" style="color: #bb7b29">
              <b>Select tickets</b>
          </div>
      </div>
      <table class="table table-striped" data-max-quantity="10">
          <thead>
          <tr  class="desktop-only">
              <th><strong>  </strong></th>
              <td><b>Price </b> </td>
              <td> <b>Quantity</b></td>
              <td> <b>total</b></td>
          </tr>
          </thead>
          <tr data-max-quantity="10"
              data-code="0002"
              data-recognitionid=""
              data-price="16,0000"
              data-bookingfee=""
              data-isrewardticket="False"
              data-isForAllocatedArea="True"
              data-cardNumber=""
              data-voucherBarcode=""
              property="offers"
              typeof="Offer"
              class="">
          <tr>
              <th><strong> Normal: </strong></th>
              <td span class="price mobile-only" property="price">
                        د.ت16,00
                    </span></td>

              <td class="quantity">
                  <div>
                      <input type="text"  id="quantityN" name="quantity" class="short numeric" value="0" onChange="fonction1();" />

                  </div>
          <td class="total">
              <div>
                  <output id="total1" name="total1" type="tel" class="short numeric" value=""readonly />
              </div>
          </td>
          </tr>
          <tr>
              <th><strong> Etudiant/scolaire: </strong></th>

              <td div class="ticket-table-member">
                    <span class="price mobile-only" property="price">
                        د.ت13,00
                    </span>
              </div> </td>
              <td class="quantity">
                  <div>

                      <input  id="quantityES" name="quantityS" type="text" class="short numeric" value="0" onChange="fonction1();" />

                  </div>
              </td>

              <td class="total">
                  <div>

                      <output id="total2" name="total2" type="tel" class="short numeric" value="" readonly  />

                  </div>
              </td>
          </tr>
      </table>

     {{-- <div id="price-summary">
          <div>
              <span class="total-label" style="color: #ac2925"><b>Total price</b></span>
              <div class="total-value"><span><b>د.ت0,00</b></span></div>
          </div>
      </div>--}}
      <div class="session-list-cart" style="top: 297.547px;">
          <div class="shopping-cart">
              <div class="loading-image">
              </div>

              <div style="color: #761b18" class="title" >
                 <b> Commande</b>
              </br>

              </div>
              <div class="cart-items">
                  <div class="not-ordered">
                      <div style="display: inline-block">
                          <span class="highlight-background line-bar"></span>
                      </div>
                      <div style="display: inline-block">
                        <span>
                            Before you<br>
                            Mon février 15 12:00
                        </br>
                        </br>
                           <div class="sub-total">
              </div>
              <div style="color: #761b18" class="totalP">
                  <b> Total price</b>
                  <div class="align-right">

                <span class="place-holder">
                   <input  id="total" name="total" type="tel" class="short numeric" value="" readonly  />
                </span>
                  </div>
              </div>

          </div>

      </div>

<br>
                            <button id="confirm" class="btn btn-warning" style="color: #761b18" type="submit" name="confirm" value="Confirmer" data-dismiss="alert" >Confirmer</button>
                           <input class="btn btn-warning" style="color: #761b18" type="button" onclick="location.href='/home';" value="Annuler" />

                      </div>
          </div>
      </div>
                      </form>
    <br>

    </br>
   {{-- @if($message = Session::get("success"))
        <h3 class="text-center text-success">{{$message}}</h3>
        @endif--}}
    @if(session()->has('message'))
        <div class="alert {{session('alert') ?? 'alert-info'}}">
            {{ session('message') }}
        </div>
        @endif

                  </div>
              </div>

                </div>


@endsection
