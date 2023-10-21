@include('user.header')
<div class="container mt-2">
    @if(Session::get('success'))
    <div class="alert alert-success" role="alert">
       <ul>
        <li>{{Session::get('success')}}</li>
       </ul>
      </div>
    @endif
            
    <div class="row mb-2">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata">
           Tambah Berita
          </button>
        <table class="table">
    </div>
</div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Judul</th>
        <th scope="col">Isi</th>
        <th scope="col">Gambar</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($data as $row)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $row->title }}</td>
          <td>{{ $row->content }}</td>
          <td>
            <img src="{{ asset('picture/berita/' . $row->featured_image) }}" alt="Gambar Berita" width="40px">
          </td>
          <td>
        
            <a href="/dataedit/{{$row->id}}" class="badge bg-primary">Edit </a>||

            <form action="/datahapus/{{$row->id}}" method="POST" class="d-inline" onsubmit="return confirmHapus(event);">
                @csrf
                @method('DELETE') 
                <button type="submit" class="btn-sm btn-danger">Hapus</button>
            </form>
          </td>
        </tr>
      @endforeach
      
      </tr>
      
    </tbody>
  </table>
@include('user.footer')