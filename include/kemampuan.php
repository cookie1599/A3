<div class="modal fade" id="kemampuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header bg-dark">
            <h5 class="modal-title" id="exampleModalLongTitle">Nilai Kemampuan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body bg-success">                            
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <label class="input-group-text bg-primary text-white" for="inputGroupSelect01">Kemampuan</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="1">Programming</option>
                    <option value="2">Memasak</option>
                    <option value="3">Sepak Bola</option>
                    <option value="n">n</option>
                </select>
            </div>
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <label class="input-group-text bg-primary text-white" for="inputGroupSelect01">Penilaian</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Belum Tahu atau Tidak</option>                    
                    <option value="1">Ya</option>                    
                </select>
            </div>
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-danger text-white">Lampiran</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>               
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-danger text-white">Penjelasan</span>
                </div>
                <textarea class="form-control" aria-label="With textarea" placeholder="Alasan Memilih Ya . . ."></textarea>
            </div>
        </div>
        
        <div class="modal-footer bg-dark">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
        </div>
        </div>
    </div>
</div>