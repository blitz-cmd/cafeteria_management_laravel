<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rules\Captcha;
use Illuminate\Support\Facades\Hash;

class User extends Controller
{
    // function index(){
    //     return view('index').view('footer');
    // }
    
    
    
    function index(Request $r){
        $r->session()->put('pdetails','index');
        return view('index');
    }

    function news(Request $r){
        $r->session()->put('pdetails','news');
        return view('news');
    }

    function signupsubmit(Request $r){
        $username=$r->post('username');
        $email=$r->post('email');
        $password=$r->post('password');
        $cpassword=$r->post('cpassword');
        $pass = bcrypt($password);
        $a=0;
        
        $emailquery=DB::table('signup')->where('email',$email)->get();
        echo $emailquery;
        date_default_timezone_set('Asia/Kolkata');
        $date = date('d-m-Y H:i:s'); 
        echo $date;
        if(count($emailquery)>0){
            $r->session()->flash('error','Email found, enter new email!');
            return redirect('signup');
        }else{
            if($password===$cpassword){
                DB::insert('insert into signup (username,email,password,cdate) values (?,?,?,?)', [$username,$email,$pass,$date]);
                $r->session()->put('pdetails','signup');
                $r->session()->flash('error','Account created successfully');
                return redirect('signup');
            }else{
                $r->session()->flash('error','Password not match');
                return redirect('signup');
            }
        }
            $this->validate($r,[
                'g-recaptcha-response'=>new Captcha(),
            ]);

    }

    function loginsubmit(Request $r){
        $this->validate($r,[
            'g-recaptcha-response'=>new Captcha(),
        ]);

        $email=$r->post('email');
        $password=$r->post('password');
        $pass=bcrypt($password);
        $emailsearch=DB::table('signup')->where('email',$email)->get();
        date_default_timezone_set('Asia/Kolkata');
        $date = date('d-m-Y H:i:s');
        $ip=geoip()->getClientIP();
        if(count($emailsearch)>0){
            foreach($emailsearch as $emailsearch){
                $dbpass= $emailsearch->password;
                $username=$emailsearch->username;
                $email=$emailsearch->email;
            }
            if(Hash::check($password,$dbpass)){
                echo "password matched";
                // echo $this->getIp();
                // echo $iip;
                DB::insert('insert into loginhistory (email,timestamp,ip) values (?,?,?)', [$email,$date,$ip]);
                $r->session()->put('username','username');
                $r->session()->put('pdetails','login');
                $r->session()->put('email','email');
                return redirect('/');
            }else{
                $r->session()->flash('error','Wrong Password');
                return redirect('login');
            }
        }else{
            $r->session()->flash('error','Account not found');
                return redirect('login');
        }   


    }

    function order(Request $r){
        $as=$r->session()->get('username');
        if($as===null){
            return redirect('login');
        }else{
            return view('order');
        }
    }

    function ordersubmit(Request $r){
        $a1='AFFOGATO';$o1=200;$a2='AMERICANO';$o2=200;$a3='CAFFÈ LATTE';$o3=200;$a4='CAFFÈ MOCHA';$o4=200;$a5='CAPPUCCINO';
        $o5=200;$a6='FLAT WHITE';$o6=200;$a7='FREAKSHAKE';$o7=200;$a8='FRAPPÉ';$o8=200;$a9='ICED MOCHA';$o9=200;

        function rs($len){
            $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            return substr(str_shuffle($str_result),0, $len);
        }
        $i=0;
        $sum=0;
        $orderid="#id".rs(8);
        $q1=$r->post('n1');$q2=$r->post('n2');$q3=$r->post('n3');$q4=$r->post('n4');$q5=$r->post('n5');
        $q6=$r->post('n6');$q7=$r->post('n7');$q8=$r->post('n8');$q9=$r->post('n9');
        // $email=$r->session()->get('email');
        DB::insert('insert into orderhistory (id) values (?)', [$orderidl]);
        if($q1!=0){
            DB::update('update orderhistory set name1=?,price1=?,quantity1=? where id = ?', [$a1,$o1,$q1,$orderid]);
            $sum=$sum+($o1*$q1);$i++;
        }
        if($q2!=0){
            DB::update('update orderhistory set name2=?,price2=?,quantity2=? where id = ?', [$a2,$o2,$q2,$orderid]);
            $sum=$sum+($o2*$q2);$i++;
        }
        if($q3!=0){
            DB::update('update orderhistory set name3=?,price3=?,quantity3=? where id = ?', [$a3,$o3,$q3,$orderid]);
            $sum=$sum+($o3*$q3);$i++;
        }
        if($q4!=0){
            DB::update('update orderhistory set name4=?,price4=?,quantity4=? where id = ?', [$a4,$o4,$q4,$orderid]);
            $sum=$sum+($o4*$q4);$i++;
        }
        if($q5!=0){
            DB::update('update orderhistory set name5=?,price5=?,quantity5=? where id = ?', [$a5,$o5,$q5,$orderid]);
            $sum=$sum+($o5*$q5);$i++;
        }
        if($q6!=0){
            DB::update('update orderhistory set name6=?,price6=?,quantity6=? where id = ?', [$a6,$o6,$q6,$orderid]);
            $sum=$sum+($o6*$q6);$i++;
        }
        if($q7!=0){
            DB::update('update orderhistory set name7=?,price7=?,quantity7=? where id = ?', [$a7,$o7,$q7,$orderid]);
            $sum=$sum+($o7*$q7);$i++;
        }
        if($q8!=0){
            DB::update('update orderhistory set name8=?,price8=?,quantity8=? where id = ?', [$a8,$o8,$q8,$orderid]);
            $sum=$sum+($o8*$q8);$i++;
        }
        if($q9!=0){
            DB::update('update orderhistory set name9=?,price9=?,quantity9=? where id = ?', [$a9,$o9,$q9,$orderid]);
            $sum=$sum+($o9*$q9);$i++;
        }
        if($sum===0){
            $r->session()->flash('error','Order atleast 1 item');
            DB::delete('delete from orderhistory where id=?',[$orderid]);
            return redirect('order');
        }else{
        DB::update('update orderhistory set total =? where id = ?', [$sum,$orderid]);
        $r->session()->put('oquantity',$i);
        $r->session()->put('oid',$orderid);
        $r->session()->put('sum',$sum);
        $r->session()->put('pdetails','order');
        $r->session()->put('sama','order');
        return redirect('odetails');
    }
    }
    function odetails(Request $r){
        $as=$r->session()->get('sama');
        if($as===null){
            return redirect('order');
        }else{
            return view('odetails');
        }
    }

    function odetailssubmit(Request $r){
        $name=$r->post('name');
        $address=$r->post('address');
        $cname=$r->post('cname');
        $cno=$r->post('cno');
        $exp=$r->post('exp');
        $cvv=$r->post('cvv');
        date_default_timezone_set('Asia/Kolkata');
        $date = date('d-m-Y H:i:s');
        $email=$r->session()->get('email');
        $id=$r->session()->get('oid');
        DB::update('update orderhistory set name=?,address=?,cname=?,cno=?,exp=?,odate=?,cvv=? where id = ?', [$name,$address,$cname,$cno,$exp,$date,$cvv,$id]);
        DB::update('update orderhistory set email=? where id=?',[$email,$id]);
        // DB::table('orderhistory')
        //       ->where('id', $id)
        //       ->update(['email' => $email]);
        $r->session()->forget('sama');
        $r->session()->put('pdetails','orderdetails');
        return redirect('checkout');
    }

    function odetailsdelete(Request $r){
        $id=$r->session()->get('oid');
        DB::delete('delete from orderhistory where id=?',[$id]);
        $r->session()->forget('sama');
        $r->session()->forget('oquantity');
        $r->session()->forget('oid');
        $r->session()->forget('sum');
        $r->session()->flash('error','Order again to proceed');
        return redirect('order');
    }

    function checkout(Request $r){
        $as=$r->session()->get('pdetails');
        if($as=='orderdetails' && $as=='checkout'){
            return view('checkout');
        }else{
            return redirect('order');
        } 
    }
}
