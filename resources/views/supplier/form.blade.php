<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="rfc" class="form-label">{{ __('Rfc') }}</label>
            <input type="text" name="rfc" class="form-control @error('rfc') is-invalid @enderror" value="{{ old('rfc', $supplier?->rfc) }}" id="rfc" placeholder="Rfc">
            {!! $errors->first('rfc', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $supplier?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="phone" class="form-label">{{ __('Phone') }}</label>
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $supplier?->phone) }}" id="phone" placeholder="Phone">
            {!! $errors->first('phone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mail" class="form-label">{{ __('Mail') }}</label>
            <input type="text" name="mail" class="form-control @error('mail') is-invalid @enderror" value="{{ old('mail', $supplier?->mail) }}" id="mail" placeholder="Mail">
            {!! $errors->first('mail', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="address" class="form-label">{{ __('Address') }}</label>
            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $supplier?->address) }}" id="address" placeholder="Address">
            {!! $errors->first('address', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="type_supp" class="form-label">{{ __('Type Supp') }}</label>
            <input type="text" name="type_supp" class="form-control @error('type_supp') is-invalid @enderror" value="{{ old('type_supp', $supplier?->type_supp) }}" id="type_supp" placeholder="Type Supp">
            {!! $errors->first('type_supp', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>