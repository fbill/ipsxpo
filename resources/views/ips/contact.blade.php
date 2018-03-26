@extends('layouts.layout')
@section('title','About Us')
@section('content')
    <section>
        <div class="container-publicities">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div >
                            <img class="img-fluid" src="img/banner-publicies-contacto.png" alt="Contáctenos">
                            <div class="position-absolute caption-publicities" >
                                <h1>CONTÁCTENOS</h1>
                                <p> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-4 pb-4">

                <div class="row">
                    <div class="col-md-7 pt-4 pb-4">
                        <h2>UBICANOS</h2>
                        <div id="map"></div>

                    </div>

                    <div class="col-md-5 pt-4 pb-4">
                        <h2>FORMULARIO</h2>
                        <form>
                            <div class="form-group">
                                <label for="username">Nombre</label>
                                <input type="text" class="form-control" id="username"   placeholder="Ingrese su nombre">
                            </div>
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input type="email" class="form-control" id="email"   placeholder="Ingrese su correo">
                            </div>
                            <div class="form-group">
                                <label for="phone">Teléfono</label>
                                <input type="text" class="form-control" id="phone"   placeholder="Ingrese su teléfono">
                            </div>
                            <div class="form-group">
                                <label for="message">Mensaje</label>
                                <textarea class="form-control" id="message" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                            <button type="submit" class="btn btn-primary">Limpiar</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <section>

    </section>

@endsection
