<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            {{-- <span class="close">&times;</span> --}}
            <h4>Agregar Nota</h4>
            <i class="fas fa-times close"></i>
        </div>
        <div class="modal-body">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert-danger" role="alert">
                    <p>* {{$error}}</p>
                    </div>
                @endforeach
            @endif
            <form action="{{route('notas.store')}}" method="post" class="formulario">
                {{csrf_field()}}
                <div class="form__item">
                    <label for="title" class="form__item__label">Título</label>
                    <input type="text" class="form__item__input" id="title" name="title" placeholder="Título de la nota"
                        required>
                </div>
                <div class="form__item">
                    <label for="description" class="form__item__label">Descripción</label>
                    <textarea cols="20" rows="4" class="form__item__input" name="description" id="description"
                        placeholder="Descripción de la nota" required></textarea>
                    <div class="contentCount">
                        <p class="count" id="count">200</p>
                    </div>
                </div>

                <div class="form__item">
                    <label for="type" class="form__item__label">Tipo</label>
                    <select name="type" id="type"  class="form__item__select" required>
                        <option value="0">Seleccione</option>
                        <option value="recort">Recordatorio</option>
                        <option value="link">Link</option>
                    </select>
                </div>

                <div class="form__item__bt">
                   <button type="submit"  class="form__item__bt__button" >Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
