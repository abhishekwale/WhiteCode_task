<?php namespace App\Controllers;

use App\Models\StudentModel;

class Student extends BaseController
{
    public function index()
    {
        $model = new StudentModel();
        $data['students'] = $model->findAll();
        return view('students/index', $data);
    }

    public function create()
    {
        return view('students/create');
    }

    public function store()
    {
        $model = new StudentModel();
        $model->save([
            'name'  => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone')
        ]);
        return redirect()->to('/student');
    }

    public function edit($id)
    {
        $model = new StudentModel();
        $data['student'] = $model->find($id);
        return view('students/edit', $data);
    }

    public function update($id)
    {
        $model = new StudentModel();
        $model->update($id, [
            'name'  => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone')
        ]);
        return redirect()->to('/student');
    }

    public function delete($id)
    {
        $model = new StudentModel();
        $model->delete($id);
        return redirect()->to('/student');
    }
}
