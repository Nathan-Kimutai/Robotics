<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use App\Http\Requests\TicketFormRequest;

class TicketsController extends Controller
{
    public function create()
    {
    	return view('tickets.create');
    }

    public function store(TicketFormRequest $request)
    {
    	$slug = uniqid();
    	$ticket = new Ticket(array(
    		'title'=>$request->get('title'),
    		'content'=>$request->get('content'),
    		'slug'=>$slug
    	));

    	$ticket->save();
    	return redirect('/contact')->with('status','Your ticket has been created! It\'s unique id is :'.$slug);
    }

    public function index()
    {
	    $tickets = Ticket::all();
	    return view('tickets.index',compact('tickets'));
    }
}
