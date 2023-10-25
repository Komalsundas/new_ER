<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Qualification;
use App\Models\EmploymentType;
use App\Models\Vacancy;
use App\Models\User;
use DB;

class AdminController extends Controller
{
    //

    /**
     * Show create vaccancy page.
     */
    public function createVacancy()
    {
        $minQuali = Qualification::all();
        $empType = EmploymentType::all();
        return view('admin.createVacancy', compact('minQuali', 'empType'));
    }

    /**
     * save and edit vaccancy.
     */
    public function saveVacancy(Request $request)
    {
    


        $request->validate([
            'position' => ['required', 'string', 'max:255'],
            'minQuali' => ['required', 'numeric'],
            'course' => ['required', 'string', 'max:255'],
            'criteria' => ['required', 'string', 'max:255'],
            'empType' => ['required', 'numeric'],
            'slot' => ['required', 'numeric'],
            'remuneration' => ['required', 'string','max:255'],
            'dateline' => ['required', 'string'],
            'tor' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // Adjust max file size as needed
        ],
        [
            'tor.required' => 'The TOR is required.',
            'tor.mimes' => 'The TOR must be a PDF file.',
        ]);

        // Store the uploaded file and get the path
        if ($request->hasFile('tor')) {
            $file = $request->file('tor');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('tor', $filename, 'public');
        }

        if($request->vacancy_id == null){
            $vacancy = Vacancy::create([
                'position' => $request->position,
                'minQualification' => $request->minQuali,
                'course' => $request->course,
                'criteria' => $request->criteria,
                'remuneration' => $request->remuneration,
                'slot' => $request->slot,
                'empType' => $request->empType,
                'dateline' => $request->dateline,
                'tor' => $filePath, // Save the file path in the database
            ]);
        }else{
            $vacancy = Vacancy::find($request->vacancy_id);

                $vacancy->position = $request->position;
                $vacancy->minQualification = $request->minQuali;
                $vacancy->course = $request->course;
                $vacancy->criteria = $request->criteria;
                $vacancy->remuneration = $request->remuneration;
                $vacancy->slot = $request->slot;
                $vacancy->empType = $request->empType;
                $vacancy->dateline = $request->dateline;
                $vacancy->tor = $filePath; // Save the file path in the database
                $vacancy->save();
        }
        
        $title = 'Created';
        Session::flash('success', 'Vacancy created successfully.');
        return redirect()->back()->with(['title'=> $title]);
        // return redirect('listVacancy');
    }

    /**
     * show vacancy list.
     */
    public function showVacancy()
    {
        $vacancies = DB::table('vacancies as v')
                        ->join('qualifications as q', 'v.minQualification', 'q.id')
                        ->select('v.*', 'q.qualification')
                        ->get();
        return view('admin.listVacancy', compact('vacancies'));
    }

    public function showVacancyUser()
{
    $vacancies = DB::table('vacancies as v')
                        ->join('qualifications as q', 'v.minQualification', 'q.id')
                        ->join('employment_types as et', 'et.id', 'v.empType')
                        ->select('v.*', 'q.qualification', 'et.employType')
                        ->get();

    return view('vacancy', compact('vacancies'));
}



    /**
     * Display the specified vacancy.
     */
    public function viewVacancy(int $id)
    {
        $minQuali = Qualification::all();
        $empType = EmploymentType::all();
        $vacancy = Vacancy::find($id);
        return view('admin.editVacancy', compact('vacancy','minQuali', 'empType'));
}


public function dashboard()
{
    $vacancies = DB::table('vacancies')
                ->select('vacancies.*')
                ->get();

    return view('dashboard', compact('vacancies'));
}


public function deleteVacancy($id)
{
    // Find the vacancy by ID
    $vacancy = Vacancy::find($id);

    if (!$vacancy) {
        return redirect()->back()->with('error', 'Vacancy not found.');
    }

    // Perform deletion logic
    $vacancy->delete();

    return redirect()->route('vacancy-list')->with('success', 'Vacancy deleted successfully.');
}




}
