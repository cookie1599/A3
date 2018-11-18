<div class="modal fade" id="penilaian" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header bg-dark">
            <h5 class="modal-title text-white" id="exampleModalLongTitle">Penilaian</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body bg-success">                            
            <div class="table-responsive">
            <table class="table-hover table-dark">
                <thead align="center">
                    <tr class="bg-danger">
                    <th scope="col" style="width: 10%; padding: 1%;">Reviewer</th>
                    <th scope="col" style="width: 20%;">Penilaian</th>
                    <th scope="col" style="width: 20%;">Lampiran</th>
                    <th scope="col" style="width: 25%;">Penjelasan</th>
                    <th scope="col">Detail</th>         
                    </tr>
                </thead>
                <tbody align="center">
                    <tr>
                        <th>1</th>
                        <td>Shiddiq : Tidak</td>
                        <td>Bukti.png</td>
                        <td>Saya memilih Tidak karena ...</td>
                        <td>
                            <select>
                                <option selected>Belum Verifikasi</option>
                                <option value="1">Benar</option>
                                <option value="2">Salah</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Hemat : Ya</td>
                        <td>Video.mp4</td>
                        <td>Saya memilih Ya karena ...</td>
                        <td>
                            <select>
                                <option selected>Belum Verifikasi</option>
                                <option value="1">Benar</option>
                                <option value="2">Salah</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Programming : Ya</td>
                        <td>Bukti.png</td>
                        <td>Saya memilih Ya karena ...</td>
                        <td>
                            <select>
                                <option selected>Belum Verifikasi</option>
                                <option value="1">Benar</option>
                                <option value="2">Salah</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>n</th>
                        <td>Review : Isi</td>
                        <td>Lampiran.ex</td>
                        <td>Alasan...</td>
                        <td>
                            <select>
                                <option selected>Belum Verifikasi</option>
                                <option value="1">Benar</option>
                                <option value="2">Salah</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>            

        <div class="modal-footer bg-dark">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
        </div>
        </div>
    </div>
</div>