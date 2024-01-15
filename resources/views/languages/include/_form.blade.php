<div class="row">
    <div class="col-2 text-end align-middle">
        <label for="description" class="col-form-label">Descrição</label>
    </div>
    <div class="col-4">
        <input type="text" name="description" id="description" class="form-control" value="{{ old('description', isset($item->description) ?? '') }}">
    </div>
    <div class="col-2 text-end align-middle">
        <label for="language_type_id" class="col-form-label">Tipo</label>
    </div>
    <div class="col-4">
        @php
            $languageType_selected = old('language_type_id', isset($item->language_type_id) ?? 0);
            $languageLevel_selected = old('level', isset($item->level) ?? 0);
        @endphp
        <select name="language_type_id" id="language_type_id" class="form-select">
            <option value="0">Selecione o tipo</option>
            @foreach ($languageTypes as $type)
                <option value="{{ $type->id }}" {{ $type->id == $languageType_selected ? 'selected' : ''}}>{{ $type->description }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="row my-4">
    <div class="col-2"></div>
    <div class="col-8 my-2">
        <select id="select-range" style="width: 28px;" name="level">
            @foreach ($languageLevels as $level)
                <option value="{{ $loop->index }}" {{ $loop->index == $languageLevel_selected ? 'selected' : ''}}>{{ $level }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-2"></div>
</div>