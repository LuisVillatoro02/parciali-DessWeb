@extends('layout.plantilla')
@section('TituloPagina','Cliente Create')
@section('contenido')
<link rel="stylesheet" href="{{ asset('css/create-customer.css') }}">
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
                    <a href="{{ route('cliente.index') }}">
                        <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                        <span class="text">Category List</span>
                    </a>
                </li>
            </ul>
        </div>
    </center>
    <div>
        <center><h2><ion-icon name="accessibility-outline"></ion-icon> Add Customers</h2></center> <br><br>
        <form class="form" action="{{ route('cliente.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <ion-icon name="person-outline"></ion-icon>
                <label>Name </label>
                <input name="name" type="text" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <ion-icon name="pencil-outline"></ion-icon>
                <label>Apellido </label>
                <input name="apellido" type="text" class="form-control" placeholder="Your Last Name" required>
            </div>
            <div class="form-group">
                <ion-icon name="call-outline"></ion-icon>
                <label>Mail</label>
                <input name="correo" type="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="form-group">
                <ion-icon name="pencil-outline"></ion-icon>
                <label>Personal Documents</label>
                <input name="dpi" type="number" class="form-control" placeholder="Your DPI" required>
            </div>
            <div class="form-group">
                <ion-icon name="copy-outline"></ion-icon>
                <label>Tipo Cliente </label>
                <select class="form-control" required name="id_cliente">
                <option>---Choice---</option>
                    @foreach ( $datos as $dat )
                        <option value="{{ $dat->id}}">{{ $dat->description  }}</option>

                    @endforeach
            </select>
                <small id="emailHelp" class="form-text text-muted">Remember to check the data well.</small>
            </div>

            <center>
            <button type="submit" class="btn btn-success"><ion-icon name="checkmark-outline"></ion-icon>Save</button>
            <button type="reset" style="color: #fff;" class="btn btn-warning"><ion-icon name="trash-outline"></ion-icon>Delete</button>
            <a class="btn btn-danger" href="{{ route('cliente.index') }}" role="button"><ion-icon name="return-down-back-outline"></ion-icon> Go Back</a>
            </center>
        </form>
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
