<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    private $tickets = [
        'tickets' => [
            1 => ['id' => 1, 'name' => 'Weekend Beach Festival', 'price' => 45, 'date' => '2020/10/18', 'time' => '09:00'],
            2 => ['id' => 2, 'name' => 'Arenal Sound', 'price' => 66, 'date' => '2020/10/18', 'time' => '14:00'],
            3 => ['id' => 3, 'name' => 'Dreambeach', 'price' => 70.5, 'date' => '2020/10/18', 'time' => '19:00'],
            4 => ['id' => 4, 'name' => 'Primavera Sound', 'price' => 23.75,  'date' => '2020/10/18', 'time' => '10:00'],
        ],
        'otro' => 1,
        'elarray' => [],
    ];
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ticket.index', $this->tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $price = $request->get('price');
        if($price != 1){
            //save
            $response = ['op' => 'store', 'result' => 1, 'id' => 0];
            return redirect('ticket')->with($response); //flash session
        }else{
            return back()->withInput(); //flash session
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show($numeroticket)
    {
        if(isset($this->tickets['tickets'][$numeroticket])) {
            $datos = $this->tickets['tickets'][$numeroticket];
            return view('ticket.show', $datos);
        }
        return $this->index(); // view('ticket.index', $this->tickets);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(isset($this->tickets['tickets'][$id])) {
            $datos = $this->tickets['tickets'][$id];
            return view('ticket.edit', $datos);
        }
        return $this->index(); // view('ticket.index', $this->tickets);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $response = ['op' => 'update', 'result' => 1, 'id' => $id];
        return redirect('ticket')->with($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = ['op' => 'delete', 'result' => 1, 'id' => $id];
        //redirect a una ruta
        //with -> datos de la sesión de tipo flash (de un solo uso)
        return redirect('ticket')->with($response);
        //redirect a una ruta por su nombre
        //return redirect()->route('ticket.index');
        //redirect a una ruta por su acción
        //return redirect()->action('App\Http\Controllers\TicketController@index');
        //redirect a la ruta anterior
        //return redirect()->back();
    }

    /**************************************************************************/    

    function delete($id) {
        $datos = $this->tickets['tickets'][$id];
        return view('ticket.delete', $datos);
    }

    function main() {
        $id = rand(1, count($this->tickets['tickets']));
        return view('main', $this->tickets['tickets'][$id]);
    }

    function ver() {
        return view('ticket.ver');
    }

    function fallback() {
        return view('fallback');
    }
    
    function backend(){
        return view('backend');
    }
}
