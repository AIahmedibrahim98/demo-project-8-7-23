<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HrController extends Controller
{
    public function index()
    {
        // $emps = DB::select("select * from employees");
        // foreach ($emps as $emp) {
        //     echo "ID :" . $emp->EMPLOYEE_ID . "<br>";
        //     echo "Name :" . $emp->FIRST_NAME . ' ' . $emp->LAST_NAME . "<br>";
        //     echo "Salary :" . $emp->SALARY . "<hr>";
        // }
        // dd(DB::insert("INSERT INTO `regions`(`REGION_ID`, `REGION_NAME`) VALUES ('777',?)", ["test 2"]));
        //dd(DB::update("update regions set REGION_NAME = 'update testtttttt' where REGION_ID = ? ", [888]));
        //dd(DB::delete("delete from regions where REGION_ID in(777,888)"));
        //DB::unprepared("") // Native SQL

        // $emp_q = DB::table("employees")->get();
        // $emp_q = DB::table("employees")->where("EMPLOYEE_ID", '=', 100)->first();
        // $emp_q = DB::table("employees")->pluck('FIRST_NAME')->toArray();
        // $emp_q = DB::table("employees")->pluck('FIRST_NAME', 'EMPLOYEE_ID')->toArray();
        // $emp_q = DB::table("employees")->count();
        // $emp_q = DB::table("employees")->count('MANAGER_ID');
        // $emp_q = DB::table("employees")->max('salary');
        // $emp_q = DB::table("employees")->min('salary');
        // $emp_q = DB::table("employees")->avg('salary');
        // $emp_q = DB::table("employees")->select("EMPLOYEE_ID", "FIRST_NAME as name")->get();
        // $emp_q = DB::table("employees")->select("EMPLOYEE_ID", "FIRST_NAME as name")->distinct()->get();
        // $emp_q = DB::table("employees")->select(DB::raw("count(*)"))->get();
        // $emp_q = DB::table("employees")->selectRaw("count(*) , DEPARTMENT_ID")->groupBy("DEPARTMENT_ID")->get();

        // $emp_q = DB::table("employees")
        //     ->join("departments", "employees.DEPARTMENT_ID", '=', 'departments.DEPARTMENT_ID')
        //     ->select("employees.FIRST_NAME", "departments.DEPARTMENT_NAME")->get();

        // $emp_left = DB::table("employees")
        //     ->leftJoin("departments", "employees.DEPARTMENT_ID", '=', 'departments.DEPARTMENT_ID')
        //     ->select("employees.FIRST_NAME", "departments.DEPARTMENT_NAME");

        // $emp_full = DB::table("employees")
        //     ->rightJoin("departments", "employees.DEPARTMENT_ID", '=', 'departments.DEPARTMENT_ID')
        //     ->union($emp_left)
        //     ->select("employees.FIRST_NAME", "departments.DEPARTMENT_NAME")->get();
        // dd($emp_full);

        // $emp_q = DB::table("employees")
        //     ->join("departments", "employees.DEPARTMENT_ID", '=', 'departments.DEPARTMENT_ID')
        //     ->selectRaw("concat(employees.FIRST_NAME,' ',employees.LAST_NAME) as FullName , departments.DEPARTMENT_NAME")->get();

        $emp_q = DB::table("employees")
            ->where("salary", '>', 8000)
            ->where('DEPARTMENT_ID', 80)->get();

        $emp_q = DB::table("employees")
            ->where("salary", '>', 8000)
            ->where('DEPARTMENT_ID', '!=', 80)->get();

        $emp_q = DB::table("employees")
            ->where("LAST_NAME", 'like', "k%")
            ->get();

        $emp_q = DB::table("employees")
            ->where([
                ['salary', '>', "8000"],
                ['DEPARTMENT_ID', '=', 80]
            ])
            ->get();

        $emp_q = DB::table("employees")
            ->where("salary", '>', 10000)
            ->orWhere('DEPARTMENT_ID', '=', 80)->get();

        /*
            $users = DB::table('users')
            ->where('password', '=', 100)
            ->where(function (Builder $query) {
                $query->where('email', 'Abigail')
                      ->orWhere('mobile', '=', 50);
            })
            ->get();
            */

        //$emp_q = DB::table("employees")
        // ->whereBetween('salary', [5000, 10000])->get();
        // ->whereNotBetween('salary', [5000, 10000])->get();
        // ->whereIn('salary', [2500, 10000])->get();
        // ->whereNotIn('salary', [2500, 10000])->get();
        // ->whereNotNull('COMMISSION_PCT')->get();
        // ->whereNull('COMMISSION_PCT')->get();
        // ->where('HIRE_DATE', '2003-06-17')->get();
        // ->whereMonth('HIRE_DATE', '06')->get();
        // ->whereDay('HIRE_DATE', '06')->get();
        // ->whereYear('HIRE_DATE', '06')->get();
        // ->whereDate('HIRE_DATE', '06')->get();
        //->whereTime('HIRE_DATE', '06')->get();
        // $emp_q = DB::table("employees")->where('salary', '>', '5000')->orderBy("salary")->get();
        // $emp_q = DB::table("employees")->where('salary', '>', '5000')->orderBy("salary",'asc')->get();
        // $emp_q = DB::table("employees")->where('salary', '>', '5000')
        // ->orderBy("salary", 'desc')
        // ->orderBy('name')->get();
        // $emp_q = DB::table("employees")->orderBy('hire_date', 'desc')->first();
        // $emp_q = DB::table("employees")->latest('hire_date')->first();
        // $emp_q = DB::table("employees")->oldest('hire_date')->first();
        // $emp_q = DB::table("employees")->inRandomOrder()->first();

        // $emp_q = DB::table("employees")->limit(10)->offset(5)->get();
        //$emp_q = DB::table("employees")->skip(10)->take(5)->get();

        dd($emp_q);
        // foreach ($emp_q as $emp) {
        //     echo "ID :" . $emp->EMPLOYEE_ID . "<br>";
        //     echo "Name :" . $emp->FIRST_NAME . ' ' . $emp->LAST_NAME . "<br>";
        //     echo "Salary :" . $emp->SALARY . "<hr>";
        // }
    }


    public function dml()
    {
        /* $region = DB::table('regions')->insert([
            [
                'REGION_ID' => '777',
                'REGION_NAME' => 'From DB Query Builder',
            ],
            [
                'REGION_ID' => '666',
                'REGION_NAME' => 'From DB Query Builder',
            ],
            [
                'REGION_ID' => '555',
                'REGION_NAME' => 'From DB Query Builder',
            ]
        ]); */

        /* $region = DB::table('regions')->insertOrIgnore([
            [
                'REGION_ID' => '777',
                'REGION_NAME' => 'From DB Query Builder',
            ],
            [
                'REGION_ID' => '666',
                'REGION_NAME' => 'From DB Query Builder',
            ],
            [
                'REGION_ID' => '555',
                'REGION_NAME' => 'From DB Query Builder',
            ],
            [
                'REGION_ID' => '444',
                'REGION_NAME' => 'From DB Query Builder insertOrIgnore',
            ]
        ]); */

        /* $region = DB::table('regions')->insertUsing(['REGION_ID', 'REGION_NAME'], DB::table('employees')
            ->where('EMPLOYEE_ID', '<=', 110)->select(['EMPLOYEE_ID', 'FIRST_NAME'])); */

        /* $region = DB::table('regions')->whereBetween('REGION_ID', [100, 110])->update([
            'REGION_NAME' => 'data updated'
        ]); */

        /*  $region = DB::table('regions')->updateOrInsert(['REGION_ID' => 500, 'REGION_NAME' => 'maha'], [
            'REGION_NAME' => 'sara'
        ]); */

        // $employees = DB::table('employees')->where('DEPARTMENT_ID', 90)->increment('salary', 5000);
        // $employees = DB::table('employees')->where('DEPARTMENT_ID', 90)
        //     ->decrement('salary', 5000, ['HIRE_DATE' => date('Y-m-d')]);

        /* $employees = DB::table('employees')->where('DEPARTMENT_ID', 90)->incrementEach([
            'salary' => 10000,
            'COMMISSION_PCT' => .5
        ]); */

        // dd($employees);

        $region = DB::table('regions')->whereBetween('REGION_ID', [100, 110])->delete();
        dd($region);
    }

    public function model()
    {
        $employees = Employee::all();
        foreach ($employees as $emp) {
            echo "<h3>" . $emp->FIRST_NAME . "</h3>";
            echo "<h3>" . $emp->DEPARTMENT_NAME . "</h3>";
        }
    }
}
