@extends('admin.layout.app')
@section('content')
<section class="form_ajout">
    <h2>Ajout de bien</h2>
    @if (session('success'))
    <div class="success" style="color:green">{{ session('success') }}</div>
    @endif
    <form action="{{asset(route('enregistrement'))}}" method="post" enctype="multipart/form-data">
        @csrf()
        <span>
            <input type="text" name="titre" id="titre" value="{{ old('titre') }}" placeholder="Titre de la propriété">
            @error('titre')
            <span class="error">{{ $message }}</span>
            @enderror
        </span>
        <span>
            <input type="text" name="surface" id="surface" value="{{ old('surface') }}" placeholder="Surface">
            @error('surface')
            <span class="error">{{ $message }}</span>
            @enderror
        </span>

        <span>
            <input type="text" name="prix" id="prix" value="{{ old('prix') }}" placeholder="Prix">
            @error('prix')
            <span class="error">{{ $message }}</span>
            @enderror
        </span>

        <span>
            <input type="text" name="piece" id="piece" value="{{ old('piece') }}" placeholder="Pièce">
            @error('piece')
            <span class="error">{{ $message }}</span>
            @enderror
        </span>

        <span>
            <input type="text" name="chambre" id="chambre" value="{{ old('chambre') }}" placeholder="Chambre">
            @error('chambre')
            <span class="error">{{ $message }}</span>
            @enderror
        </span>

        <span>
            <input type="text" name="ville" id="ville" value="{{ old('ville') }}" placeholder="Ville">
            @error('ville')
            <span class="error">{{ $message }}</span>
            @enderror
        </span>

        <span>
            <input type="text" name="commune" id="commune" value="{{ old('commune') }}" placeholder="Commune/quartier">
            @error('commune')
            <span class="error">{{ $message }}</span>
            @enderror
        </span>

        <span>
            <textarea name="description" id="description" placeholder="Description">{{ old('description') }}</textarea>
            @error('description')
            <span class="error">{{ $message }}</span>
            @enderror
        </span>

        <span>
            <input type="file" name="image" accept="image/*" id="presentationImage">
            @error('image')
            <span class="error">{{ $message }}</span>
            @enderror
        </span>

        <span>
            <input type="file" multiple name="album[]" accept="image/*" id="albumImages">
            @error('album.*')
            <span class="error">{{ $message }}</span>
            @enderror
        </span>

        <input type="submit" class="submit-button" value="Enregistrer">

        @if (session('error'))
        <div class="error">{{ session('error') }}</div>
        @endif
    </form>

</section>
@endsection