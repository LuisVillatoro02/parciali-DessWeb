@extends('layout.plantilla')
@section('TituloPagina','Delete Categories')
@section('contenido')
<link rel="stylesheet" href="{{ asset('css/create-categories.css') }}">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <center>
            <div class="alert alert-danger" role="alert">
              <h1>Stop..!!  <ion-icon name="hand-left-outline"></ion-icon>Do you want to delete?</h1>
            </div>
            <div class="container">
              <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>

                      <tr>
                        <td>{{ $tipo->id}}</td>
                        <td>{{ $tipo->description }}</td>
                    </tr>

                </tbody>
              </table>
            </div>
          </div>
              <br><br><br><br>
              <form action="{{ route('tipocliente.destroy',$tipo->id) }}" method="POST">
                @csrf
                @method('DELETE')
                    <div class="navigation">
                        <ul>
                            <li class="list active">
                                    <button class="btn btn-sucess"><span class="icon"><ion-icon name="checkmark-outline"></ion-icon></span></button>
                            </li>
                            <li class="list">
                                <a class="btn btn-infor" href="{{ route('tipocliente.index') }}">
                                    <span class="icon"><ion-icon name="close-outline"></ion-icon></span>
                                </a>
                            </li>
                        </ul>
                    </div>
            </form>
    </center>
    </div>
    <center>
        <footer>
           <div class="">
             <div class="container text-center">
                 <p class="text-muted mb-0 py-2">© 2022 DesWeb - LuisVillatoro02 All rights reserved.</p>
             </div>
           </div>
         </footer>
   </center>
        <script>
            const list = document.querySelectorAll('.list');
            function activeLink(){
                list.forEach((item) =>
                item.classList.remove('active'));
                this.classList.add('active');
            }
            list.forEach((item) =>
            item.addEventListener('click',activeLink));

        </script>
