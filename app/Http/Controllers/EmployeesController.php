<?php

namespace App\Http\Controllers;
use App\Employees;
use App\DataType;
use App\FamilyRelationship;
use App\WorkProcess;
use App\SalaryProcess;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class EmployeesController extends Controller
{
    public function Employees(Request $req){
    	$limit = 10;
        $page            = $req->query('page');
        $numberOfRecords = Employees::query()->count();
        $numberOfPage    = $numberOfRecords > 0 ? ceil($numberOfRecords / $limit) : 1;
        $employees         = Employees::query()
        ->select('employees.employee_id',
            'employees.employee_code',
            'employees.fullname',
            'employees.email',
            'employees.phone_number',
            'work_process.company_name',
            'work_process.company_address',
            'department.department_name',
            'position.position_name',
            'employees.img')
        ->JOIN ('work_process','employees.employee_id','=', 'work_process.employee_id')
        ->LEFTJOIN ('department', 'work_process.department_id','=','department.department_id')
        ->LEFTJOIN ('position', 'work_process.position_id','=','position.position_id')
        ->skip(($page - 1) * $limit)
        ->take($limit)
        ->get();
        return view('employees/employees', [
            'employees' => $employees,
            'numberOfRecords' => $numberOfRecords,
            'page'         => $page,
            'numberOfPage' => $numberOfPage,
            'fullname' => $req->session()->get('fullname')
        ]);
    }

    public function EmployeesDetail($id){
        $employeesDetail = Employees::query()
        ->select('employees.employee_id',
            'employees.employee_code',
            'employees.fullname',
            'employees.dob',
            'employees.gender',
            'employees.email',
            'employees.phone_number',
            'employees.place_of_birth',
            'employees.home_town', 
            'employees.permanent_address', 
            'employees.current_address',
            'employees.academic_level',
            'employees.foreign_language',
            'employees.date_of_issue', 
            'employees.place_of_issue', 
            'employees.date_union', 
            'employees.place_union',
            'employees.date_party',
            'employees.place_party',
            'd1.data_name', 
            'd2.data_name', 
            'd3.data_name', 
            'employees.contract_id',
            'employees.identity_card_number',
            'employees.get_married', 
            'employees.img',
            'employees.status')
        ->JOIN (DB::RAW('data_type AS d1'),'employees.province_id','=','d1.data_id')
        ->JOIN (DB::RAW('data_type AS d2'),'employees.nation_id','=','d2.data_id')
        ->JOIN (DB::RAW('data_type AS d3'), 'employees.nationality_id','=','d3.data_id')
        ->where('employees.employee_id', $id)
        ->get();

        $family_relationship = FamilyRelationship::query()
        ->select('family_relationship.family_relationship_id',
        'data_type.data_name',
        'family_relationship.fullname',
        'family_relationship.dob',
        'family_relationship.job', 
        'family_relationship.place_of_birth', 
        'family_relationship.permanent_address', 
        'family_relationship.current_address', 
        'family_relationship.work_address', 
        'family_relationship.phone_number', 
        'family_relationship.work_phone_number', 
        'family_relationship.note', 
        'family_relationship.created_at', 
        'family_relationship.created_by', 
        'family_relationship.updated_at', 
        'family_relationship.updated_by')
        ->JOIN ('data_type','family_relationship.data_id','=','data_type.data_id')
        ->WHERE ('family_relationship.employee_id',$id)
        ->get();

        $work_process = WorkProcess::query()
        ->select('work_process.work_process_id',
        'p.position_name',
        'd.department_name',
        'work_process.start_date', 
        'work_process.end_date',
        'work_process.company_name', 
        'work_process.company_address', 
        'work_process.note', 
        'work_process.created_at', 
        'work_process.updated_at', 
        'work_process.created_by', 
        'work_process.updated_by')
        ->JOIN (DB::RAW('department AS d'), 'd.department_id','=','work_process.department_id')
        ->JOIN (DB::RAW('position AS p'), 'p.position_id','=','work_process.position_id')
        ->WHERE ('work_process.employee_id',$id)
        ->get();
        
        $salary_process = SalaryProcess::query()
        ->select('salary_process.salary_process_id',
        'salary_process.basic_salary', 
        'salary_process.decision_number',
        'salary_process.note',
        'salary_process.created_at',
        'salary_process.created_by',
        'salary_process.updated_at',
        'salary_process.updated_by')
        ->WHERE ('salary_process.employee_id',$id)
        ->ORDERBY ('salary_process.created_at','DESC')
        ->get();

        
        return view('employees/employee_detail', [
            'employeesDetail' => $employeesDetail,
            'family_relationship' => $family_relationship,
            'work_process' => $work_process,
            'salary_process' => $salary_process
        ]);
    }

    // public function FamilyRelationship($id){
    //     
    //     return view('employees/relationship', [
    //         'family_relationship' => $family_relationship
    //     ]);
    // }
}
