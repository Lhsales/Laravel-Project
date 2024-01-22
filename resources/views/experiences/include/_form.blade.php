<div class="row">
    <div class="col-2 text-end align-middle">
        <label for="ocupation" class="col-form-label">Cargo</label>
    </div>
    <div class="col-4">
        <input type="text" name="ocupation" id="ocupation" class="form-control" value="{{ old('ocupation', $item->ocupation ?? '') }}">
    </div>
    <div class="col-2 text-end align-middle">
        <label for="company" class="col-form-label">Empresa</label>
    </div>
    <div class="col-4">
        <input type="text" name="company" id="company" class="form-control" value="{{ old('company', $item->company ?? '') }}">
    </div>
</div>
<div class="row my-4">
    <div class="col-2 text-end align-middle">
        <label for="description" class="col-form-label">Descrição</label>
    </div>
    <div class="col-10">
        <textarea name="description" id="description" rows="3" class="form-control">{{ old('description', $item->description ?? '') }}</textarea>
    </div>
</div>
<div class="row my-4">
    <div class="col-2 text-end align-middle">
        <label for="started_at" class="col-form-label">Início</label>
    </div>
    <div class="col-4">
        <div class="input-append date input-group mb-3" id="dp_started_at" data-date-format="mm-yyyy">
            <input class="form-control" size="16" type="text" name="started_at" id="started_at">
            <div class="input-group-append">
                <span class="input-group-text fs-4">
                    <ion-icon name="calendar-outline"></ion-icon>
                </span>
            </div>
        </div>
    </div>
    <div class="col-2 text-end align-middle">
        <label for="ended_at" class="col-form-label">Fim</label>
    </div>
    <div class="col-4">
        <div class="input-append date input-group mb-3" id="dp_ended_at" data-date-format="mm-yyyy">
            <input class="span2 form-control" size="16" type="text" name="ended_at" id="ended_at">
            <div class="input-group-append">
                <span class="input-group-text fs-4">
                    <ion-icon name="calendar-outline"></ion-icon>
                </span>
            </div>
        </div>
    </div>
</div>