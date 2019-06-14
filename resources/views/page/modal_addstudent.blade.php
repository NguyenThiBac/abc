<div class="modal" tabindex="-1" role="dialog" style="display:block;">
    <div class="modal-dialog" role="document">
        @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    {{$err}}<br>
                @endforeach
            </div>
        @endif
        @if(Session('thongbao'))
            <div class="alert alert-success">
                {{Session('thongbao')}}
            </div>
        @endif
        <div class="modal-content">
            <div class="modal-header">
                <form action="{{route('modal_add')}}" method="post">
                    <h3>THEM THONG TIN MUON SACH</h3>
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label for="inputSothe" class="col-sm-4 col-form-label">So the:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="sothe" id="sothe" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHoten" class="col-sm-4 col-form-label">Ho ten:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="hoten" id="hoten" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNgaysinh" class="col-sm-4 col-form-label">Ngay sinh:</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="ngaysinh" id="ngaysinh" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputLop" class="col-sm-4 col-form-label">Lop:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="lop" id="lop" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputMasosach" class="col-sm-4 col-form-label">Ma so sach:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="masosach" id="masosach" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputTensach" class="col-sm-4 col-form-label">Ten sach:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tensach" id="tensach" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputTacgia" class="col-sm-4 col-form-label">Tac gia:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tacgia" id="tacgia" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputSotrang" class="col-sm-4 col-form-label">So trang:</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="sotrang" id="sotrang" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNgaymuon" class="col-sm-4 col-form-label">Ngay muon:</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="ngaymuon" id="ngaymuon" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNgaytra" class="col-sm-4 col-form-label">Ngay tra:</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="ngaytra" id="ngaytra" >
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-warning">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
