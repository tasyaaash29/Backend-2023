<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Database\Eloquent\Casts\Json;

class StudentController extends Controller
{
		public function index()
	{
			#menggunakan model student untuk select data
		$students = student::all();

		if (!empty($students)) {
			$response = [
				'massage'=> 'Menampilkan data semua student',
				'data'=> $students,
			];
			return response()->json($response, 200);
		} else{
			$response = [
				'massage' => 'Data tidak ada'
			];
			return response()->json($response, 200);
		}
	}

	public function store(Request $request)
	{
		// $input = [
		// 	'nama' => $request->nama,
		// 	'nim' => $request->nim,
		// 	'email' => $request->email,
		// 	'jurusan' => $request->jurusan
		// ];

		$student = Student::create($request->all());

		$response = [
			'massage' => 'Data Student Berhasil Di Buat',
			'data' => $student,
		];

		return response()->json($response, 201);
	}

	public function show($id){
		$student = Student::find($id);

		if($student) {
			$response = [
				'massage' => 'Get Detail Student',
				'data' => $student
			];

			return response()->json($response, 200);
		} else {
			$response = [
				'massage'=> 'Data Not Found'
			];

			return response()->json($response, 404);
		}
	}

	public function update(Request $request, $id) {
		$student = student::find($id);

		if ($student) {
			$response = [
				'massage'=>'Student is updated',
				'data'=> $student->update($request->all())
			];
			return response()->json($response, 200);
		} else {
			$response = [
				'massage'=> 'Data Not Found'
			];
			return response()->json($response, 404);
		}
	}
	public function destroy($id)
	{
		$student = Student::find($id);

		if ($student) {
			$response = [
				'massage'=> 'Student Is Delete',
				'data' => $student->delete()
			];

			return response()->json($response, 200);
		} else {
			$response = [
				'massage' => 'Data Not Found'
			];

			return response()->json($response, 404);
		}
	}

}