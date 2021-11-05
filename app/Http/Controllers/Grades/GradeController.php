<?php


namespace App\Http\Controllers\Grades;
use App\Http\Controllers\Controller;

use App\Http\Requests\StoreGrades;
use  App\Models\Grade;
use Illuminate\Http\Request;
class GradeController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
    public function index()
    {
        $Grades = Grade::all();
        return view('pages.Grades.Grades',compact('Grades'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        try {
            $Grade = new Grade();
            $Grade->Name_Grades = ['en' => $request->Name_Grades_en, 'ar' => $request->Name_Grades];
            $Grade->Notes = $request->Notes;
            $Grade->save();
            toastr()->success(trans('messages.success'));
            return redirect()->route('Grades.index');
        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }


    }



    /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {

  }

}

?>
