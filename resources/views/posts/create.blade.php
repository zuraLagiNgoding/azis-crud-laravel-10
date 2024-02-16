<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tambah Data Post - SantriKoding.com</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
  @include('partials.navbar')
  <div class="container mb-5">
    <div class="row pt-5 mt-3">
      <div class="col">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/posts">Data Posts</a></li>
            <li class="breadcrumb-item acrive" aria-current="page">Edit Posts</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card border-0 shadow-sm rounded">
          <div class="card-body">
            <h3>ADD POST</h3>
            <hr>
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">

              @csrf
              <div class="mb-3">
                <div class="form-group">
                  <label class="font-weight-bold">GAMBAR</label>
                  <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                  <!-- error message untuk title -->
                  @error('image')
                    <div class="alert alert-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label class="font-weight-bold">JUDUL</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    value="{{ old('title') }}" placeholder="Masukkan Judul Post">

                  <!-- error message untuk title -->
                  @error('title')
                    <div class="alert alert-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label class="font-weight-bold">KONTEN</label>
                  <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5"
                    placeholder="Masukkan Konten Post">{{ old('content') }}</textarea>

                  <!-- error message untuk content -->
                  @error('content')
                    <div class="alert alert-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                <button type="reset" class="btn btn-md btn-warning">RESET</button>
                <a href="/posts" class="btn">CANCEL</a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('partials.footer')
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('content');
  </script>
</body>

</html>