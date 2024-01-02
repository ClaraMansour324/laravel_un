<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Category;
use App\Traits\Common;


class CarController extends Controller
{
   // private $columns =['title','description','published'];   madam 3mlt validation m4 m7tago 5las
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars=Car::get();
        return view('cars',compact('cars')); //cars hna esm al variable f line 17
        
        //bs feha 7aga m4 sa7
        // $cars = Car::get($car);
        //     $car->publishedText = $car->published ? 'Yes' : 'No';
        //     return view('cars', compact('car'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::get();
        return view('addCar',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return dd($request->request);
        // $cars = new Car();
        // $cars->title= $request->title;
        // $cars->description =$request->description;
        // if(isset($request->published)){
        //     $cars->published=1;
        // }else{
        //     $cars->published=0;
        // }
       
        // $cars-> save();
        // return 'Data added successefully';
        //$data=$request-> only($this-> columns):

        $messages = $this->messages();
        // $messages=[              est5dmtha f ala5er b public function lw7dha w b2yt bnady 3liha bs
        //     'title.required'=>'العنوان مطلوب',
        //     'title.string'=>'Should be string',
        //     'description.required'=> 'should be text',
        //     ];
        $data = $request->validate([
             'title'=>'required|string|max:50',
             'description'=> 'required|string',
             'image' => 'required|mimes:png,jpg,jpeg|max:2048',
             'category_id'=>'required|string|max:50',

            //  'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            ], $messages);
            
        $data['published'] = isset($request->published);
        Car::create($data);
        return redirect('Cars'); // dah esm al route bta3 al index

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $categories = Car::all();
        // $category_id = " "; // This value would typically come from your data
        // return view('showCar', compact('categories', 'category_id'));

        $car = Car::findOrFail($id);
        $categories = Car::all();
        $category_id = " "; 
        return view('showCar',compact('car'));   //car hna esm al variable f line 
    //     $selectedValue = 2; // This value would typically come from your data
    // return view('your.view', compact('selectedValue'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        $categories = Car::all();
        return view('updateCar',compact('car','categories'));   //car hna esm al variable f line 72
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = $this->messages();
        $data = $request->validate([
             'title'=>'required|string|max:50',
             'description'=> 'required|string',
             'image' => 'nullable|mimes:png,jpg,jpeg|max:2048',
             'category_id' => 'required|exists:categories,id',
            //  'cat_name'=>'required|string|max:50',

            ], $messages);

        if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'assets/images');  
            $data['image'] = $fileName;
            unlink("assets/images/" . $request->oldImage);
        }
        
        $data['published'] = isset($request->published);
        // $data['cat_name'] = isset($request->published);

        // $categories->update([ 'category_id ' => $request->input('category_id '),])
        Car::where('id', $id)->update($data);
        return redirect('Cars');

        // $data= $request->only($this->columns);
        // $data['published']=isset($request->published);
        // Car::where('id',$id)->update($data);
        // return redirect('Cars'); // dah esm al route bta3 al index

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id',$id)->delete();
        return redirect('Cars');
    }
  
    // trashed list
    public function trashed()
    {
         $cars = Car::onlyTrashed()->get();
        return view('trashed',compact('cars'));
    }

    //force delete
    public function forceDelete(string $id)
    {
        Car::where('id',$id)->forceDelete();
        return redirect('Cars');
    }

    //restore
    public function restore(string $id)
    {
        Car::where('id',$id)->restore();
        return redirect('Cars');
    }

    public function messages()
    {
        return[
            'title.required'=>'the title field is required',
            'title.string'=>'Should be string',
            'description.required'=> 'the description field is required, should be text',
            'image.required'=> 'please select the picture',
            'image.mimes'=> 'incorrect image type',
            'image.max'=> 'Max file size exceeded',
            'cat_name.required'=>'the title field is required',


        ];
    }

    public function upload(Request $request){
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'assets/images';
        $request->image->move($path, $file_name);
        return 'Uploaded';
    }
}



            //   lec 8
// $messages = $this->messages();
//         $data = $request->validate([
//              'title'=>'required|string|max:50',
//              'description'=> 'required|string',
//              'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
//             ], $messages);

//             if($request->hasFile('image')){
//                 $fileName = $this->uploadFile($request->image, 'assets/images');    
//                 $data['image'] = $fileName;
//             }
            
//             $data['published'] = isset($request->published);
//             Car::where('id', $id)->update($data);
//             return redirect('cars');