<div class="row">
    <div class="col-2 text-end align-middle">
        <label for="description" class="col-form-label">Descrição</label>
    </div>
    <div class="col-4">
        <input type="text" name="description" id="description" class="form-control" value="{{ isset($item->description) ? $item->description : '' }}">
    </div>
    <div class="col-2 text-end align-middle">
        <label for="language_type_id" class="col-form-label">Tipo</label>
    </div>
    <div class="col-4">
        <select name="language_type_id" id="language_type_id" class="form-select">
            <option selected>Selecione o tipo</option>
            @foreach ($languageTypes as $type)
                <option value="{{ $type->id }}">{{ $type->description }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="row my-4">
    <div class="col-2"></div>
    <div class="col-8 my-2">
        <select id="select-range" style="width: 28px;" name="level">
            <option value="0">Não conheço</option>
            <option value="1">Precário</option>
            <option value="2" selected>Mediano</option>
            <option value="3">Bom</option>
            <option value="4">Ótimo</option>
        </select>
    </div>
    <div class="col-2"></div>
</div>