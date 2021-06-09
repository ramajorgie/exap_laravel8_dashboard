<?php

namespace App\Mail;

use App\Http\Controllers\MainEmailController;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;


class TestMail extends Mailable
{
    use Queueable, SerializesModels;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $nama;
    public $email;
    public $pesan;
    
    public function __construct($nama,$email,$pesan)
    {
        $this->nama = $nama;
        $this->email = $email;
        $this->pesan = $pesan;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
   
    public function build()
    {
      
        return $this->from($this->email)
        ->view('MainMail/email_isi')
        ->with(
         [
             'nama_judul' => $this->nama ,
             'email' =>$this->email,
             'nama' => $this->nama,
             'pesan' => $this->pesan,
             
         ]);
         
    }
}
