<form action="{{ route('movies.index') }}" method="GET">
        <select name="genre">
            <option value="">Select a Genre</option>
            @foreach($genres as $genre)
                <option value="{{ $genre->name }}" {{ request('genre') == $genre->name ? 'selected' : '' }}>{{ $genre->name }}</option>
            @endforeach
        </select>
    <button type="submit">Filter</button>
</form>