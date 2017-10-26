<!-- form_partials.delivery_options -->
<div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Gudang</label>

  <div class="col-sm-10">
     <select name="gudang_id" class="form-control">
        @foreach($warehouses as $warehouse)
          <option value="{{ $warehouse->id }}">{{ $warehouse->nama }}</option>
        @endforeach
    </select>
  </div>
</div>

<div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Angkutan</label>

  <div class="col-sm-10">
     <select name="vendor_id" class="form-control">
        @foreach($vendors as $vendor)
          <option value="{{ $vendor->id }}">{{ $vendor->nama }}</option>
        @endforeach
    </select>
  </div>
</div>