

<div class="col-2 text-end align-middle">
    <label for="description" class="col-form-label">Descrição</label>
</div>
<div class="col-8">
    <input type="text" name="description" id="description" class="form-control" value="{{ isset($item->description) ? $item->description : ''}}">
</div>