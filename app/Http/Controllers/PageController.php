<?php

namespace App\Http\Controllers;

use App\User;
use App\Transkrip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class PageController extends Controller
{


    public function Home()
    {
        return view('home', ["key" => "Home"]);
    }

    public function MasterData()
    {
        $transkrip = Transkrip::orderBy('id', 'desc')->get();
        // return $transkrip;
        return view('masterData', ["key" => "Master Data", "tr" => $transkrip]);
    }

    public function FAQ()
    {
        return view('faq', ["key" => "FAQ"]);
    }

    public function About()
    {
        return view('about', ["key" => "About"]);
    }

    public function create()
    {
        return view("create", ["key" => "Master Data"]);
    }

    public function save(Request $request)
    {
        $file_name = time() . "-" . $request->file('Foto')->getClientOriginalName();
        $path = $request->file('Foto')->storeAs('images', $file_name, 'public');

        $transkrip = Transkrip::create([
            'NIM' => $request->NIM,
            'Nama' => $request->Nama,
            'Alamat' => $request->Alamat,
            'IPK' => $request->IPK,
            'Foto' => $path
        ]);
        return redirect('/MasterData')->with('alert', 'alert');
    }

    public function edit($id)
    {
        $transkrip = Transkrip::find($id);
        return view("edit", ["key" => "Master Data", "tr" => $transkrip]);
    }

    public function delete($id)
    {
        $transkrip = Transkrip::find($id);
        $transkrip->delete();
        return redirect('/MasterData');
    }

    public function update(Request $request, $id)
    {
        $transkrip = Transkrip::find($id);

        $transkrip->NIM = $request->NIM;
        $transkrip->Nama = $request->Nama;
        $transkrip->IPK = $request->IPK;

        if ($request->foto) {
            if ($transkrip->foto) {
                Storage::disk('public')->delete($transkrip->foto);
            }
            $file_name = time() . "-" . $request->file('Foto')->getClientOriginalName();
            $path = $request->file('Foto')->storeAs('images', $file_name, 'public');
            $transkrip->Foto = $path;
        }

        $transkrip->save();
        return redirect('/MasterData')->with('alert', 'Data Berhasil di Ubah');

        // $transkrip = Transkrip::find($id);

        // if ($request->hasFile('Foto')) {
        //     $file_name = time()."-".$request->file('Foto')->getClientOriginalName();
        //     $path = $request->file('Foto')->storeAs('images', $file_name, 'public');
        //     $transkrip->Foto = $path;
        // }

        // $transkrip->update($request->except('Foto'));
        // return redirect('/MasterData');
    }

    public function Login()
    {
        return view('login', ["key" => ""]);
    }

    function changePassword(Request $request)
    {
        return view('changePassword', ["key" => ""]);
    }

    function updatePassword(Request $request)
    {
        $user = Auth::user();
        // return bcrypt($request->newPassword);
        if ($request->newPassword == $request->confirmPassword) {
            $user->password = bcrypt($request->newPassword);
            $user->save();
            return redirect('/changePassword')->with('info', 'Password Successfully Changed');
        } else {
            return redirect('/changePassword')->with('info', 'Password Does Not Match');
        }

    }
}
