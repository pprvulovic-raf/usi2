<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    //APP
    public function spisakSvi(){
        $taskovi = Task::all();
        return view('home')->with('taskovi',$taskovi);
    }
    public function spisakZavrseni(){
        $taskovi = Task::all()->where('zavrseno',1);
        return view('home')->with('taskovi',$taskovi);
    }
    public function novi(){
        $kategorije = Category::all();
        return view('dodaj')->with('kategorije', $kategorije);
    }


    //API
    public function dodajNovi(Request $request){
        //kreira novi u bazi, vraca json novog
        $novi = new Task();
        $novi->zadatak = $request->naziv;
        $novi->opis = $request->opis;
        $novi->category_id = $request->category_id;
        $novi->setTrajanje($request->trajanje_sati, $request->trajanje_minuta);
        $novi->zavrseno = false;

        $novi->save();

        return response()->json($novi);
    }

    public function zavrsi($id){
        //update u bazi, promeni status, vraca json
        $task = Task::find($id);
        if(!$task){
            return response()->json([
                'err'=>'Nema takvog zadatka'
            ]);
        } else {
            $task->zavrseno = true;
            $task->save();
            return response()->json($task);
        }
    }

    public function taskovi(){
        //vraca sve u json
        $taskovi = Task::all();
        return response()->json($taskovi);
    }
}
