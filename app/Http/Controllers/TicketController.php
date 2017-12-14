<?php

namespace App\Http\Controllers;

use App\tbl_tickets;
use App\Ticket;
use App\tickets;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ticket.scanticket');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }

    public function check(Request $request)
    {

//        dd($request->barcode);
        $barcode = $request->barcode;
        if (tbl_tickets::where('barcode','=',$barcode)->count()){
            $ticket = tbl_tickets::where('barcode','=',$barcode)->first();
            if ($ticket->used){
                return redirect('ticket');
            }
            else{
                $ticket->used = 1;
                $ticket->save();
                return redirect('ticket');
            }
        }
        else{
            echo "false";
        }
//        $check =  tbl_tickets::where('barcode','=',$barcode)->count();
//        dd($check);

//        $ticket = tbl_tickets::where();
        //Compare ticket with database.
        //If the ticket excists check of its been used.
        //If not used set as used and return succes message and ticket data.
        //If it IS used return error message.
        //If ticket doesnt exist return error message.
        //Return to the scan ticket page with the correct message and with ticket info if applicable.

    }
}
