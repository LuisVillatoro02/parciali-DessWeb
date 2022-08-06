@extends('layout.plantilla')
@section('TituloPagina','Create Categories')
@section('contenido')
<link rel="stylesheet" href="..\Css\create-categories.css">
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
                    <a href="{{ route('tipocliente.index') }}">
                        <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                        <span class="text">TipoCliente List</span>
                    </a>
                </li>
            </ul>
        </div>
    </center>
    <div>
        <center><h2><ion-icon name="apps-outline"></ion-icon> Create Clientes Type</h2><br><br></center>
        <form class="form" action="{{ route('tipocliente.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <ion-icon name="copy-outline"></ion-icon>
                <label>Client Type</label>
                <input type="text" name="description" class="form-control" placeholder="Tipo Cliente" required>
                <small id="emailHelp" class="form-text text-muted">Remember to check the data well.</small>
            </div>
            <center>
            <button type="submit" class="btn btn-success"><ion-icon name="checkmark-outline"></ion-icon>Save</button>
            <button type="reset" style="color: #fff;" class="btn btn-warning"><ion-icon name="trash-outline"></ion-icon>Delete</button>
            <a class="btn btn-danger" href="{{ route('tipocliente.index') }}" role="button"><ion-icon name="return-down-back-outline"></ion-icon> Go Back</a>
            </center>
        </form>
        @if ($errors ->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ( $errors ->all() as $error )
                <li>{{ $error }}</li>

                @endforeach
            </ul>
        </div>
        @endif
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
