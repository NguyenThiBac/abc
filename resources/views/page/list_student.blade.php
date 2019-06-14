
<div class="library"></div>
<div class="logo">
    <img src="http://taimuihongonline.com/uploads/service/6199267_entheostemplates_logo_images_1-library2.jpg">
</div>
<div class="list_student">
        <h2>THONG TIN MUON SACH</h2>
    <button class="btn-them" action="{{route('modal_add')}}">Them</button>
    <table border="1">
        <thead>
        <tr>
            <th>SO THE</th>
            <th>HO TEN</th>
            <th>NGAY SINH</th>
            <th>LOP</th>
            <th>MA SO SACH</th>
            <th>TEN SACH</th>
            <th>TAC GIA</th>
            <th>SO TRANG</th>
            <th>NGAY MUON</th>
            <th>NGAY TRA</th>
            <th colspan="2">THAO TAC</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($list_student as $student)
                <td>{{$student->sothe}}</td>
                <td>{{$student->hoten}}</td>
                <td>{{$student->ngaysinh}}</td>
                <td>{{$student->lop}}</td>
                <td>{{$student->masosach}}</td>
                <td>{{$student->tensach}}</td>
                <td>{{$student->tacgia}}</td>
                <td>{{$student->sotrang}}</td>
                <td>{{$student->ngaymuon}}</td>
                <td>{{$student->ngaytra}}</td>
                <td><button class="btn-sua">Sua</button></td>
                <td><button class="btn-xoa">Xoa</button></td>
        </tr>
        </tbody>
        @endforeach
    </table>
</div>



