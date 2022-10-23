<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    //
    

    public function proses_register(request $request){
      
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users,email',
            'password'=>'required',
            'password_confirmation' => 'required_with:password|same:password'
        ]);

      
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->status = 'aktif';
        $data->save();

        if($data){
            $admin = Admin::find(1);

            Notification::send($admin, new AdminNotifications('transaksi', 'admin', 'berhasil'));
            
            return redirect()->back()->with('success','Register success, silahkan melakukan login terlebih dahulu!');

        }else{
            return redirect()->back()->with('error','Register Failed');
        }

        // event(new Registered($data));
    }

    public function proses_login(request $request){
        return $request;
        $request->validate([
            'role'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        $check= $request->only('email','password');
        $data = User::where('email',$request->email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if($data->status== 'aktif'){
                if(Hash::check($request->password,$data->password)){
                    if(Auth::guard('web')->attempt($check)){
                        if($user->role == "end-user"){
                            session(['user'=>true]);
                            return redirect()->route('dashboard');
                        } elseif ($user->role == "pihak rsj"){
                            session(['pihakrsj'=>true]);
                            return redirect()->route('pihakrsj.dashboard');
                        } elseif ($user->role == "lsm"){
                            session(['lsm'=>true]);
                            return redirect()->route('lsm.dashboard');
                        }
                    }else{
                        return redirect()->back()->with('error','Login Failed!!!');
                    }
                }
                else{
                    return redirect('login')->with('error','Password Salah !');
                }
            }else{
                return redirect('login')->with('error','Akun telah dinonaktifkan, silahkan hubungi customer service!');
            }
            
        }
        else{
            return redirect('login')->with('error','Email belum terdaftar! Silahkan registrasi terlebih dahulu!');
        }
    
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
}
