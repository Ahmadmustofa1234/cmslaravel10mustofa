 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
      function confirmHapus(event) {
          let shouldSubmitForm = false; // Variabel yang menentukan apakah form harus diajukan
  
          Swal.fire({
              title: 'Konfirmasi Hapus',
              text: 'Apakah Anda yakin ingin menghapus data ini?',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonText: 'Ya, Hapus',
              cancelButtonText: 'Batal',
          }).then((result) => {
              if (result.isConfirmed) {
                  shouldSubmitForm = true; // Setel variabel ke true jika pengguna menekan "Ya, Hapus"
              }
  
              if (shouldSubmitForm) {
                  // Jika shouldSubmitForm adalah true, kirimkan permintaan penghapusan ke server
                  document.forms[0].submit(); // Ini mengacu pada form pertama di halaman
              }
  
              return false; // Pastikan mengembalikan false
          });
  
          return shouldSubmitForm; // Kembalikan nilai shouldSubmitForm sebagai hasil onsubmit
      }
  </script>
  
  </body>
</html>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Yakin Untuk Logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class='btn btn-primary'>Log Out</button>
</form>
      </div>
    </div>
  </div>
</div>
{{--  --}}
<!-- Modal -->
<div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="tambahdataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Tambah Berita</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('tambah-berita') }}" method="POST" enctype="multipart/form-data"> <!-- Pastikan Anda menambahkan enctype="multipart/form-data" jika Anda mengunggah gambar -->
          @csrf <!-- Untuk melindungi dari serangan CSRF -->
          <div class="mb-3">
              <label for="text" class="form-label">Title</label>
              <input type="text" class="form-control" id="text" name="title" required>
          </div>
          <div class="mb-3">
              <label for="content" class="form-label">Content</label>
              <textarea class="form-control" id="content" rows="3" name="content" required></textarea>
          </div>
          <div class="mb-3">
              <label for="formFileLg" class="form-label">Upload Gambar</label>
              <input class="form-control form-control-lg" id="formFileLg" type="file" name="featured_image">
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah Berita</button>
          </div>
      </form>
      
      </div>
    </div>
  </div>
</div>