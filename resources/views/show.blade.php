@extends("plantillas")

@section("title","producto")

@section("content")
<h2>Playeras Unixes</h2>
    <Form>
    <label>Color de playeras:</label>
    <input type="text" name="colores"><br>

    <label>Tallas de Playeras:</label>
    <input type="text" name="playeras"

   <button type="submit">Guardar</button>
    </Form>
@endsection