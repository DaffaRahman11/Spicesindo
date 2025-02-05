<x-layout-admin>

    <h1 class="h3 ml-2 mb-4 text-gray-800">Tambah Rempah Rempah</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary mb-3">Tabel Produk Rempah</h6>
            <div class="col-lg-8">
                <form class="user" action="/dashboard/data-rempah" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user @error('detail') is-invalid @enderror" id="namaRempah"
                                placeholder="Nama Rempah - Rempah"  name="namaRempah">
                                @error('namaRempah')
                                <div class="invalid-feedback">{{$message}}
                                  </div>
                                @enderror
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user @error('slug') is-invalid @enderror" id="slug"  name="slug"
                                placeholder="Slug">
                                @error('slug')
                                <div class="invalid-feedback">{{$message}}
                                  </div>
                                @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <input class="form-control form-control-user form-control-lg" type="file" id="formFile" id="fotoRempah" name="fotoRempah" >
                        @error('fotoRempah')
                        <div class="invalid-feedback">{{$message}}
                          </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user @error('detailRempah') is-invalid @enderror" id="detailRempah" name="detailRempah" 
                            placeholder="Detail Rempah">
                        @error('detailRempah')
                        <div class="invalid-feedback">{{$message}}
                          </div>
                        @enderror
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary btn-user btn-block mt-3">
                        Tambah Data
                    </button>
                </form>
            </div>
        
        </div>
    <div>

<script>
    const namaRempah = document.querySelector('#namaRempah');
    const slug = document.querySelector('#slug');

    tittle.addEventListener('change', function(){
        fetch('/dashboard/data-rempah/checkSlug?namaRempah=' + namaRempah.value)
        .then(response => response.json()
        .then(data => slug.value = data.slug)
    )
    });
</script>

</x-layout-admin>