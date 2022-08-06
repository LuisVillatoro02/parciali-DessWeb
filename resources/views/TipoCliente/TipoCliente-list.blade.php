@extends('layout.plantilla')
@section('TituloPagina','TipoCliente List')
@section('contenido')
<link rel="stylesheet" href="{{ asset('css/list-categories.css') }}">
        <br><br>
        <center>
        <div class="navigation">
            <ul>

                <li class="list active">
                    <a href="/">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="list">
                    <a href="{{ route('tipocliente.create') }}">
                        <span class="icon"><ion-icon name="add-circle-outline"></ion-icon></span>
                        <span class="text">Add Category</span>
                    </a>
                </li>
            </ul>
        </div>
    </center>
    <div class="container">
        <div class="table-responsive">
        <table class="table">
            <center><h2><ion-icon name="apps-outline"></ion-icon>Clientes Type</h2><br><br></center>
            <thead class="thead-dark">
              <tr>
                <th scope="col"><ion-icon name="id-card-outline"></ion-icon> Id</th>
                <th scope="col"><ion-icon name="browsers-outline"></ion-icon> Description</th>
                  <th scope="col"><ion-icon name="create-outline"></ion-icon> Edit</th>
                  <th scope="col"><ion-icon name="trash-outline"></ion-icon> Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($datos as $dat)
                  <tr>
                    <td>{{ $dat->id }}</td>
                    <td>{{ $dat->description }}</td>
                    <td>
                        <form action="{{ route('tipocliente.edit',$dat->id)}}" method="GET">
                            <button class="btn">
                                <span>
                                    <ion-icon name="create-outline" class="btn btn-outline-warning"></ion-icon>
                                </span>
                            </button>
                        </form>
                    </td>
                      <td>
                        <form action="{{ route('tipocliente.show',$dat->id)}}" method="GET">
                            <button class="btn">
                                <ion-icon name="close-outline" class="btn btn-outline-danger"></ion-icon>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
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
