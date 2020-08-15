<form method="post" action="{{url('/productos')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
<label for="Producto">{{'Producto'}}</label>
<input type="text" name="Producto" id="Producto">

<label for="Descripcion">{{'Descripcion'}}</label>
<input type="text" name="Descripcion" id="Descripcion">


<label for="precio">{{'precio'}}</label>
<input type="text" name="precio" id="precio">


<label for="imagen">{{'imagen'}}</label>
<input type="file" name="imagen" id="imagen">

<input type="submit" value="Agregar">
</form>
