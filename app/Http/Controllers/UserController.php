<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\Education;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function store(Request $request)
    {
        // dd($request);
        // Validate the form data
        $validatedUserData = $request->validate([
            'name' => 'required|string|max:255',
            'cid' => 'required|string|max:255',
            'dob' => 'required|date|max:255',
            'gender' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'dzongkhag' => 'required|string|max:255',
            'gewog' => 'required|string|max:255',
            'village' => 'required|string|max:255',
            'present_address' => 'required|string|max:255',
            'passport_photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'coverletter' => 'required|file|mimes:pdf|max:2048',
            'cidcopy' => 'required|file|mimes:pdf|max:2048',
            'cv' => 'required|file|mimes:pdf|max:2048',
            'mc' => 'required|file|mimes:pdf|max:2048',
        ]);
        if($request->hasFile('passport_photo')){
            $file= $request->file('passport_photo');
            $filename='passport'.'.'.$file->getClientOriginalExtension();
            $file->storeAs ($request->cid,$filename,'public');
            
        }
        if($request->hasFile('coverletter')){
            //for coverletter
            $file= $request->file('coverletter');
            $coverletter_path='coverletter'.'.'.$file->getClientOriginalExtension();
            $file->storeAs ($request->cid,$coverletter_path,'public');
            
        }
        if($request->hasFile('cidcopy')){
            //for cid_copy
            $file= $request->file('cidcopy');
            $cid_path=$request->cid.'.'.$file->getClientOriginalExtension();
            $file->storeAs ($request->cid,$cid_path,'public');
        }
        if($request->hasFile('cv')){
            //for cv
            $file= $request->file('cv');
            $cv_path='cv'.'.'.$file->getClientOriginalExtension();
            $file->storeAs ($request->cid,$cv_path,'public');
        }

        if($request->hasFile('mc')){
            //for mc
            $file= $request->file('mc');
            $mc_path='mc'.'.'.$file->getClientOriginalExtension();
            $file->storeAs ($request->cid,$mc_path,'public');
        }

        $applicant= new Applicant([
            'name' => $validatedUserData['name'],
            'cid' => $validatedUserData['cid'],
            'dob' => $validatedUserData['dob'],
            'gender' => $validatedUserData['gender'],
            'contact' => $validatedUserData['contact'],
            'email' => $validatedUserData['email'],
            'dzongkhag' => $validatedUserData['dzongkhag'],
            'gewog' => $validatedUserData['gewog'],
            'village' => $validatedUserData['village'],
            'present_address' => $validatedUserData['present_address'],
            'passport_photo' => $filename,
            'coverletter' => $coverletter_path,
            'cidcopy' => $cid_path,
            'cv' => $cv_path,
            'mc' => $mc_path,
        ]);
        $applicant->save();



        //save education 
        if($request->hasFile('x_marksheet')){
            $file= $request->file('x_marksheet');
            $x_path='x_marksheet'.'.'.$file->getClientOriginalExtension();
            $file->storeAs ($request->cid,$x_path,'public');
        }

        $x_education= new Education([
            'institute' => $request->x_institute,
            'year' => $request->x_year,
            'course_name' => "",
            'grade' => 10,
            'stream' =>  'N',
            'eng' => $request->x_eng,
            'dzo' => $request->x_dzo,
            'math' =>$request->x_mat,
            'phy' => $request->x_phy,
            'che' => $request->x_che,
            'bio' => $request->x_bio,
            'his' => $request->x_his,
            'geo' => $request->x_geo,
            'eco' => $request->x_eco,
            'it' =>  $request->x_it,
            'com' => 0,
            'acc' => 0,
            'aggregate' => $request->x_percentage,
            'marksheet'=>$x_path,
            'applicant_id'=>$applicant->id
        ]);
        $x_education->save();

        //Class 12
        if($request->hasFile('xii_marksheet')){
            $file= $request->file('xii_marksheet');
            $xii_path='xii_marksheet'.'.'.$file->getClientOriginalExtension();
            $file->storeAs ($request->cid,$xii_path,'public');
        }
        $xii_education= new Education([
            'institute' => $request->xii_institute,
            'year' => $request->xii_year,
            'course_name' => "",
            'grade' => 12,
            'stream' =>$request->stream,
            'eng' => $request->xii_eng,
            'dzo' => $request->xii_dzo,
            'math' =>$request->xii_mat,
            'phy' => $request->xii_phy,
            'che' => $request->xii_che,
            'bio' => $request->xii_bio,
            'his' => $request->xii_his,
            'geo' => $request->xii_geo,
            'eco' => $request->xii_eco,
            'it' =>  $request->xii_it,
            'com' => $request->xii_com,
            'acc' => $request->xii_acc,
            'aggregate' => $request->xii_percent,
            'marksheet'=>$xii_path,
            'applicant_id'=>$applicant->id
        ]);
        $xii_education->save();

        //degree
        if($request->hasFile('degree_marksheet')){
            $file= $request->file('degree_marksheet');
            $degree_path='degree_marksheet'.'.'.$file->getClientOriginalExtension();
            $file->storeAs ($request->cid,$degree_path,'public');
        }
        $degree_education= new Education([
            'institute' => $request->degree_institute,
            'year' => $request->degree_year,
            'course_name' => $request->degree_course,
            'grade' => 15,
            'stream' =>'N',
            'eng' => 0,
            'dzo' => 0,
            'math' =>0,
            'phy' => 0,
            'che' => 0,
            'bio' => 0,
            'his' => 0,
            'geo' => 0,
            'eco' => 0,
            'it' =>  0,
            'com' => 0,
            'acc' => 0,
            'aggregate' => $request->degree_percentage,
            'marksheet'=>$degree_path,
            'applicant_id'=>$applicant->id
        ]);
        $degree_education->save();

        //to save experience data
        if($request->company != null){
            $i = 0;
            foreach($request->company as $company){
                $file= $request->file('document')[$i];
                // $ex_path= $file->getClientOriginalName().'.'.$file->getClientOriginalExtension();
                $ex_path='experience'.$i.'.'.$file->getClientOriginalExtension();
                $file->storeAs ($request->cid,$ex_path,'public');
                $experience = [
                    'company' => $request->company[$i],
                    'post' => $request->position[$i],
                    'from' => $request->from[$i],
                    'to' => $request->to[$i],
                    'place' => $request->place[$i],
                    'reason' => $request->reason[$i],
                    'document' => $ex_path,
                    'applicant_id' => $applicant->id,
                ];
                
                DB::table('employements')->insert($experience);
                $i++;
            }
        }

        // $experience= new experience([
        //     'company' => $request->company,
        //     'year' => $request->x_year,
        //     'course_name' => "",
        //     'grade' => 10,
        //     'stream' =>  'N',
        //     'eng' => $request->x_eng,
        //     'dzo' => $request->x_dzo,
        //     'math' =>$request->x_mat,
        //     'phy' => $request->x_phy,
        //     'che' => $request->x_che,
        //     'bio' => $request->x_bio,
        //     'his' => $request->x_his,
        //     'geo' => $request->x_geo,
        //     'eco' => $request->x_eco,
        //     'it' =>  $request->x_it,
        //     'com' => 0,
        //     'acc' => 0,
        //     'aggregate' => $request->x_percentage,
        //     'marksheet'=>$request->x_marksheet,
        //     'applicant_id'=>$applicant->id
        // ]);
        // $x_education->save();

        // Store the data in the database
        // You can use Eloquent or any other method here
        // $validatedAcademicData = $request->validate([
        //     // Your validation rules for academic marks
        // ]);
    
        // Create records in both models
        // $applicantDetails = Applicant::create($validatedUserData);
        // $academicMarks = Education::create($validatedAcademicData);
    
        // You can associate the academic marks with the user if needed
        // $applicantDetails->academicMarks()->associate($academicMarks);
    
        // Redirect back or to a success page
        $title = 'Submitted';
        Session::flash('success', 'Application submitted successfully.');
        return redirect()->back()->with(['title'=> $title]);
        // return redirect()->back()->with('success', 'Form submitted successfully!');
       

    }

}
