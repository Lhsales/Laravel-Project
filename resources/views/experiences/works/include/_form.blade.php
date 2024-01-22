<div class="row">
    <div class="col-2 text-end align-middle">
        <label for="name" class="col-form-label">Nome</label>
    </div>
    <div class="col-10">
        <input type="text" name="name" id="name" class="form-control" value="{{ old('description', $item->name ?? '') }}">
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