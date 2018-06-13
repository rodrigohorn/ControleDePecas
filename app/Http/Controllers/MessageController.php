<?php

namespace Chat\Http\Controllers;

use Chat\Message;
use DB;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index()
    {
        $messages = Message::orderBy('id', 'desc')->paginate(15);

        return view('message.index', array('messages' => $messages));
    }

    public function create()
    {
        return view('message.create');
    }

    public function store(\Chat\Http\Requests\MessageRequest $request)
    {

        $message = new \Chat\Message($request->all());

        $message->user_id = \Auth::user()->id;

        $message->save();

        \Session::flash('flash_message', [
            'message'=>'Mensagem enviada com sucesso!',
            'class'=>'alert-success'
        ]);

        return redirect()->route('message.index');
    }

    public function show(Message $message)
    {
        return view('message.show', ['message' => $message]);
    }

    public function edit(Message $message)
    {
        if( \Auth::user()->id == $message->user_id) {
            return view('message.edit', array('message' => $message));
        } else {
            \Session::flash('flash_message', [
                'message'=>'Você não tem acesso!',
                'class'=>'alert-dange'
            ]);
            //throw new \Exception('Você não tem acesso!');
        }
    }


    public function update(\Chat\Http\Requests\MessageRequest $request, Message $message)
    {
        if($message->user_id == \Auth::user()->id) {

            $message->update($request->all());

            \Session::flash('flash_message', [
                'message'=>'Mensagem atualizada com sucesso!',
                'class'=>'alert-success'
            ]);

            return $this->index();

        } else {
            \Session::flash('flash_message', [
                'message'=>'Usuário não tem permissões para editar!',
                'class'=>'alert-dange'
            ]);
        //    throw new \Exception('Usuário não tem permissões para editar!');
        }
    }


    public function destroy(Message $message)
    {
        if( \Auth::user()->id == $message->user_id) {
            $message->delete();

            \Session::flash('flash_message', [
                'message'=>'Mensagem apagada com sucesso!',
                'class'=>'alert-success'
            ]);

        } else {

            \Session::flash('flash_message', [
                'message'=>'Você não tem acesso!',
                'class'=>'alert-dange'
            ]);

            //throw new \Exception('Você não tem acesso');
        }

        return redirect()->route('message.index');
    }

    public function report()
    {
        $rows = DB::table('messages')
            ->join('users', 'users.id', '=', 'messages.user_id')
            ->select('users.name', DB::raw('count(*) as count'))
            ->groupBy('users.name')
            ->paginate(15);

        return view('message.report', ['relatorio' => $rows]);
    }


}
