@include('user.header')
<center>
    @if(Session::get('success'))
<div class="alert alert-success" role="alert">
   <ul>
    <li>{{Session::get('success')}}</li>
   </ul>
  </div>
@endif
          

    <h1>Edit Data</h1>
</center>
<div class="container">
    <div class="row">
        <form action="{{ route('edit', ['id' => $data->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Judul:</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $data->title }}">
            </div>
            <div class="form-group mt-2 mb-2">
                <label for="content">Isi:</label>
                <textarea name="content" id="content" class="form-control">{{ $data->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('post') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
   
    @include('user.footer')