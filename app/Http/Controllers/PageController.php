<?php
namespace App\Http\Controllers;
use App\Nguoimuon;
use  Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Student;

class PageController extends Controller
{
    use ValidatesRequests;
    public function getNguoimuon()
    {
        $list_nguoimuon = Nguoimuon::all();
        return view('page.list_nguoimuon', ['list_nguoimuon' => $list_nguoimuon]);
    }

    public function getStudents()
    {
        $list_student = Student::all();
        return view('page.list_student', compact('list_student', '$list_student'));
    }

    public function modalStudent()
    {
        return view('page.modal_addstudent');
    }

    public function postStudent(Request $request)
    {
        $this->validate($request, [
            'sothe' => 'required|max:5',
            'hoten' => 'required|min:3',
            'ngaysinh' => 'required',
            'lop' => 'required|max:3',
            'masosach' => 'required',
            'tensach' => 'required',
            'tacgia' => 'required|min:3',
            'sotrang' => 'required',
            'ngaymuon' => 'required',
            'ngaytra' => 'required'
        ], [
            'sothe.required' => 'ban chua nhap so the',
            'sothe.max' => 'So the chi duoc toi da 5 ky tu',
            'hoten.required' => 'Ban chua nhap ho ten',
            'hoten.min' => 'Ho ten phai co it nhat 3 ky tu',
            'ngaysinh.required' => 'Ban chua nhap ngay sinh',
            'lop.required' => 'Ban chua nhap lop',
            'masosach.required' => 'Ban chua nhap ma so sach',
            'tensach.required' => 'Ban chua nhap ten sach',
            'tacgia.required' => 'Ban chua nhap tac gia',
            'tacgia.min' => 'Ten tac gia phai co it nhat 3 ky tu',
            'sotrang.required' => 'Ban chua nhap so trang',
            'ngaymuon.required' => 'Ban chua nhap ngay muon',
            'ngaytra.required' => 'Ban chua nhap ngay tra'
        ]);
        $student= new Student();
        $student->sothe=$request->sothe;
        $student->hoten=$request->hoten;
        $student->ngaysinh=$request->ngaysinh;
        $student->lop=$request->lop;
        $student->masosach=$request->masosach;
        $student->tensach=$request->tensach;
        $student->tacgia=$request->tacgia;
        $student->sotrang=$request->sotrang;
        $student->ngaymuon=$request->ngaymuon;
        $student->ngaytra=$request->ngaytra;

        return redirect('modal_add')->with('thongbao','Ban da them thanh cong');
    }
}
