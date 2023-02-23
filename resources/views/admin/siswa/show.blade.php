<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <a href="/admin/siswa" class="btn btn-primary mb-3">
                    Kembali</a>
                <div class="form-group">
                    <label for="">File</label>
                </div>
                @if (isset($siswa))
                    <iframe src="/{{ $siswa->file }}" width="1200px" height="900px" class="mt-4" alt="">
                @endif





                </form>
            </div>
        </div>
    </div>
</div>
