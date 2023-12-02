<!-- resources/views/review/index.blade.php -->

@extends('layout.main')

@section('container')
    <div class="container">
        <div class="col-lg-6">
            <form action="{{ route('review.store') }}" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <div class="mb-3">
                    <label for="rating" class="form-label">Rating:</label>
                    <input type="range" class="form-range" min="0" max="5" step="0.1" id="rating"
                        oninput="updateRating(this.value)" value="4" name="rating">
                    <span id="rating-value">4.0</span>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi Review:</label>
                    <input type="hidden" name="description" id="description" value="{{ old('description') }}">
                    <trix-editor input="description"></trix-editor>
                </div>

                <button type="submit" class="btn btn-primary">Submit Review</button>
            </form>
        </div>
    </div>

    <script>
        function updateRating(value) {
            document.getElementById('rating-value').innerText = value;
        }
    </script>
@endsection
