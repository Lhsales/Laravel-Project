<div class="row">
    <div class="col-2 text-end align-middle">
        <label for="scholarity_type_id" class="col-form-label">Tipo</label>
    </div>
    <div class="col-4">
        @php
            $scholarityType_selected = old('scholarity_type_id', isset($item->scholarity_type_id) ?? 0);
        @endphp
        <select name="scholarity_type_id" id="scholarity_type_id" class="form-select">
            <option value="0">Selecione o tipo</option>
            @foreach ($scholarityTypes as $type)
                <option value="{{ $type->id }}" {{ $type->id == $scholarityType_selected ? 'selected' : ''}}>{{ $type->description }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-2 text-end align-middle">
        <label for="institution" class="col-form-label">Instituição</label>        
    </div>
    <div class="col-4">
        <input type="text" name="institution" id="institution" class="form-control" value="{{ old('institution', $item->institution ?? '') }}">
    </div>
</div>
<div class="row my-4">
    <div class="col-2 text-end align-middle">
        <label for="course" class="col-form-label">Curso</label>
    </div>
    <div class="col-10">
        <input type="text" name="course" id="course" class="form-control" value="{{ old('course', $item->course ?? '') }}">
    </div>
</div>
<div class="row my-4">
    <div class="col-2 text-end align-middle">
        <label for="started_at" class="col-form-label">Início</label>
    </div>
    <div class="col-2">
        <div class="input-append date input-group mb-3" id="dp_started_at" data-date-format="mm-yyyy">
            <input class="form-control" size="16" type="text" name="started_at" id="started_at">
            <div class="input-group-append">
                <span class="input-group-text fs-4">
                    <ion-icon name="calendar-outline"></ion-icon>
                </span>
            </div>
        </div>
    </div>
    <div class="col-2"></div>
    <div class="col-2 text-end align-middle">
        <label for="ended_at" class="col-form-label">Fim</label>
    </div>
    <div class="col-2">
        <div class="input-append date input-group mb-3" id="dp_ended_at" data-date-format="mm-yyyy">
            <input class="span2 form-control" size="16" type="text" name="ended_at" id="ended_at">
            <div class="input-group-append">
                <span class="input-group-text fs-4">
                    <ion-icon name="calendar-outline"></ion-icon>
                </span>
            </div>
        </div>
    </div>
    <div class="col-2"></div>
</div>